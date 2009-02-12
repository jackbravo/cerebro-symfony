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
      $campaign = $form->save();

      $this->redirect('@campaign_edit?id='.$campaign['id']);
    }
  }
}
