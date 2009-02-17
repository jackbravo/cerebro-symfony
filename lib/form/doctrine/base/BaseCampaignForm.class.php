<?php

/**
 * Campaign form base class.
 *
 * @package    form
 * @subpackage campaign
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 8508 2008-04-17 17:39:15Z fabien $
 */
class BaseCampaignForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'nombre'              => new sfWidgetFormInput(),
      'vendedor_id'         => new sfWidgetFormDoctrineSelect(array('model' => 'sfGuardUser', 'add_empty' => true)),
      'categoria_id'        => new sfWidgetFormDoctrineSelect(array('model' => 'CategoriaCampaign', 'add_empty' => true)),
      'producto_id'         => new sfWidgetFormDoctrineSelect(array('model' => 'Producto', 'add_empty' => true)),
      'specialty_id'        => new sfWidgetFormDoctrineSelect(array('model' => 'Specialty', 'add_empty' => true)),
      'cliente'             => new sfWidgetFormInput(),
      'orden'               => new sfWidgetFormInput(),
      'facturacion'         => new sfWidgetFormInput(),
      'fecha_inicio'        => new sfWidgetFormDateTime(),
      'fecha_cierre'        => new sfWidgetFormDateTime(),
      'activa'              => new sfWidgetFormInputCheckbox(),
      'fecha_ingreso'       => new sfWidgetFormDateTime(),
      'fecha_actualizacion' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorDoctrineChoice(array('model' => 'Campaign', 'column' => 'id', 'required' => false)),
      'nombre'              => new sfValidatorString(array('max_length' => 255)),
      'vendedor_id'         => new sfValidatorDoctrineChoice(array('model' => 'sfGuardUser', 'required' => false)),
      'categoria_id'        => new sfValidatorDoctrineChoice(array('model' => 'CategoriaCampaign', 'required' => false)),
      'producto_id'         => new sfValidatorDoctrineChoice(array('model' => 'Producto', 'required' => false)),
      'specialty_id'        => new sfValidatorDoctrineChoice(array('model' => 'Specialty', 'required' => false)),
      'cliente'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'orden'               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'facturacion'         => new sfValidatorNumber(array('required' => false)),
      'fecha_inicio'        => new sfValidatorDateTime(array('required' => false)),
      'fecha_cierre'        => new sfValidatorDateTime(array('required' => false)),
      'activa'              => new sfValidatorBoolean(array('required' => false)),
      'fecha_ingreso'       => new sfValidatorDateTime(array('required' => false)),
      'fecha_actualizacion' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('campaign[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Campaign';
  }

}