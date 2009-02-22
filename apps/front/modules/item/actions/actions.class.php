<?php

/**
 * item actions.
 *
 * @package    cerebro
 * @subpackage item
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class itemActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->item_list = $this->getRoute()->getObjects();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->item = $this->getRoute()->getObject();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = $this->getForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->form = $this->getForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->form = $this->getForm($this->getRoute()->getObject());
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->form = $this->getForm($this->getRoute()->getObject());

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  protected function getForm($object = null)
  {
    if ($this->getUser()->hasCredential('admin')) {
      return new ItemForm($object);
    }
    else
      if ($this->getUser()->hasCredential('comercial')) {
        return new ItemComercialForm($object);
      }
    else {
      return new ItemUsuarioForm($object);
    }
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->getRoute()->getObject()->delete();

    $this->redirect('@item');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()));
    if ($form->isValid())
    {
      $item = $form->save();

      $this->redirect('@campaign_show?id='.$item['campaign_id']);
    }
  }
}
