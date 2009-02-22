<?php 

class ItemComercialForm extends ItemForm
{
  public function configure()
  {
    parent::configure();
    unset($this['campaign_id']);
    unset($this['plaza_id']);
    unset($this['categoria_id']);
    unset($this['tipo_id']);
    unset($this['responsable_id']);
    unset($this['impresor_id']);
    unset($this['entrada_impresor']);
    unset($this['salida_impresor']);
    unset($this['mensajeria_id']);
    unset($this['guia']);
    unset($this['fecha_envio']);
    unset($this['fecha_recepcion']);
    unset($this['permisionario']);
    unset($this['carroceria']);
    unset($this['compra_directa']);
    unset($this['ruta']);
    unset($this['placas']);
    unset($this['economico']);
    unset($this['instalacion']);
    unset($this['desmontaje']);
    unset($this['evidencia']);   
    unset($this['fecha_actualizacion']);
  }
}
