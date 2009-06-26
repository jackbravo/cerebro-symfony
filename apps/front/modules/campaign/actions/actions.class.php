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
    if ($request->hasParameter('activa')) {
      $this->getUser()->setAttribute('campaign_activa', $request->getParameter('activa'));
    }
    $activa = $this->getUser()->getAttribute('campaign_activa', 1);
    $q = Doctrine::getTable('Campaign')->createQuery('c')
      ->leftJoin('c.Vendedor')
      ->leftJoin('c.Categoria')
      ->leftJoin('c.Producto')
      ->leftJoin('c.Specialty')
      ->addWhere('c.activa=?', array($activa));

    if ($this->getUser()->hasCredential(array('admin'), false)) {
    }
    else if ($this->getUser()->hasCredential(array('comercial'), false)) {
      $q->addWhere('c.vendedor_id = ?', array($this->getUser()->getId()));
    }
    else { // if ($this->getUser()->hasCredential(array('operador'), false))
      // esto es para mostrar solo las del operador
      //$q->leftJoin('c.Items i');
      //$q->addWhere('i.responsable_id = ?', array($this->getUser()->getId()));
    }

    $this->pager = new sfDoctrinePager('Campaign', 10);
    $this->pager->setQuery($q);
    $this->pager->setPage($request->getParameter('page', 1));
    $this->pager->init();
  }

  public function executeVigentes(sfWebRequest $request)
  {
    $this->ongoing = Doctrine::getTable('Campaign')->findOngoingCampaigns();
  }

  public function executeFinalizadas(sfWebRequest $request)
  {
    $this->finished = Doctrine::getTable('Campaign')->findFinishedCampaigns();
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
    $campaign_id = $request->getParameter('id');
    $items = $request->getParameter('items');

    $item_collection = new Doctrine_Collection('Item');
    foreach ($items['plaza_id'] as $key => $value)
    {
      for ($i = 0; $i < $items['no_items'][$key]; $i++){
        $item = new Item();
        $item->plaza_id = $items['plaza_id'][$key];
        $item->categoria_id = $items['categoria_id'][$key];
        $item->tipo_id = $items['tipo_id'][$key];
        $item->responsable_id = $items['responsable_id'][$key];
        $item->campaign_id = $campaign_id;
        $item_collection->add($item);
      }
    }

    //echo "<pre>";
    //print_r($item_collection->toArray());
    //exit;

    $item_collection->save();
    $this->redirect('@campaign_show?id='.$campaign_id);
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
