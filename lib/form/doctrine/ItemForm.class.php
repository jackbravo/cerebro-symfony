<?php

/**
 * Item form.
 *
 * @package    form
 * @subpackage Item
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 6174 2007-11-27 06:22:40Z fabien $
 */
class ItemForm extends BaseItemForm
{
  public function configure()
  {   
    unset($this['fecha_actualizacion']);
    unset($this['campaign_id']);

    $this->widgetSchema->setLabels(array(
      'campaign_id' => 'Campaña',
      'plaza_id' => 'Plaza',
      'categoria_id' => 'Categoria',
      'tipo_id' => 'Tipo',
      'responsable_id' => 'Responsable',
      'impresor_id' => 'Impresor',
      'mensajeria_id' => 'Mensajeria',
      'guia' => 'No. de guía',
      '' => '',
    ));
  }
}
