<?php

/**
 * Campaign form.
 *
 * @package    form
 * @subpackage Campaign
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 6174 2007-11-27 06:22:40Z fabien $
 */
class CampaignForm extends BaseCampaignForm
{
  public function configure()
  {
    unset($this['fecha_ingreso'], $this['fecha_actualizacion']);

    $this->widgetSchema->setLabels(array(
      'categoria_id' => 'Categoria',
      'vendedor_id' => 'Vendedor',
      'producto_id' => 'Producto',
      'specialty_id' => 'Specialty',
      'orden' => 'No. de orden',
      'facturacion' => 'Facturación MXN:',
    ));
  }
}
