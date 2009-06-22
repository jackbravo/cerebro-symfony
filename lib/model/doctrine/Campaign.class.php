<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Campaign extends BaseCampaign
{

  public function __toString(){
    return $this->nombre ? $this->nombre : '';
  }
  public function getDuracion(){ //devuelve la cantidad de segundos que dura una campaña
    $diff= (strtotime($this->fecha_cierre))-(strtotime($this->fecha_inicio));
    return $diff;
  }
  public function getItems($responsable_id = null){
    $q = Doctrine_Query::create()
      ->from('Item i')
      ->leftJoin('i.Responsable r')
      ->leftJoin('i.Plaza p')
      ->leftJoin('i.Categoria c')
      ->leftJoin('i.Tipo t')
      ->leftJoin('i.Impresor imp')
      ->leftJoin('i.Mensajeria m')
      ->addWhere('i.campaign_id=?', array($this->id))
      ->orderBy('i.plaza_id, i.position');

    if ($responsable_id){
      $q->addWhere('i.responsable_id = ?', array($responsable_id));
    }
    return $q->execute();  // $query= $this->id // es mi Id de mi campaña, lo puedo usar para el query item.campaign_id = ?
    
  }
}
