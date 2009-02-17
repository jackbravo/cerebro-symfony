<?php

/**
 * campaign actions.
 *
 * @package    cerebro
 * @subpackage campaign
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class campaignActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
 //   $this->campaign_list = $this->getRoute()->getObjects();
   $q = Doctrine_Query::create()
     ->from('Campaign c')
     ->where('c.activa=true');
     $this->campaign_list = $q->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->campaign = $this->getRoute()->getObject();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new CampaignForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->form = new CampaignForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeAddItems(sfWebRequest $request)
  {
    $this->campaign = $this->getRoute()->getObject();
  }

  public function executeCreateItems(sfWebRequest $request)
  {
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->form = new CampaignForm($this->getRoute()->getObject());
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->form = new CampaignForm($this->getRoute()->getObject());

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->getRoute()->getObject()->delete();

    $this->redirect('@campaign');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()));
    if ($form->isValid())
    {
      $is_new = $form->isNew(); //Valida si la forma es nueva (viene de ser creada) o si viene de ser editada una ya existente
      $campaign = $form->save(); //Guarda el obejto en la base de datos.

      if ($is_new) {
        $this->redirect('@campaign_addItems?id='.$campaign['id']); // Si la forma fué nueva, la manda a agregarle sus items
      } else {
        $this->redirect('@campaign_show?id='.$campaign['id']); // Si la forma no es nueva, la manda a su show, una vez editada.
      }
    }
  }
}
