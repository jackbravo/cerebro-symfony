<?php

/**
 * Item form base class.
 *
 * @package    form
 * @subpackage item
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 8508 2008-04-17 17:39:15Z fabien $
 */
class BaseItemForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'campaign_id'         => new sfWidgetFormDoctrineChoice(array('model' => 'Campaign', 'add_empty' => true)),
      'plaza_id'            => new sfWidgetFormDoctrineChoice(array('model' => 'Plaza', 'add_empty' => true)),
      'categoria_id'        => new sfWidgetFormDoctrineChoice(array('model' => 'CategoriaItem', 'add_empty' => true)),
      'tipo_id'             => new sfWidgetFormDoctrineChoice(array('model' => 'Tipo', 'add_empty' => true)),
      'responsable_id'      => new sfWidgetFormDoctrineChoice(array('model' => 'sfGuardUser', 'add_empty' => true)),
      'prueba_color'        => new sfWidgetFormDateTime(),
      'impresor_id'         => new sfWidgetFormDoctrineChoice(array('model' => 'Impresor', 'add_empty' => true)),
      'entrada_impresor'    => new sfWidgetFormDateTime(),
      'salida_impresor'     => new sfWidgetFormDateTime(),
      'mensajeria_id'       => new sfWidgetFormDoctrineChoice(array('model' => 'Mensajeria', 'add_empty' => true)),
      'guia'                => new sfWidgetFormInput(),
      'fecha_envio'         => new sfWidgetFormDateTime(),
      'fecha_recepcion'     => new sfWidgetFormDateTime(),
      'permisionario'       => new sfWidgetFormInput(),
      'carroceria'          => new sfWidgetFormInput(),
      'compra_directa'      => new sfWidgetFormInput(),
      'ruta'                => new sfWidgetFormInput(),
      'placas'              => new sfWidgetFormInput(),
      'economico'           => new sfWidgetFormInput(),
      'instalacion'         => new sfWidgetFormDateTime(),
      'desmontaje'          => new sfWidgetFormDateTime(),
      'evidencia'           => new sfWidgetFormInputCheckbox(),
      'fecha_actualizacion' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorDoctrineChoice(array('model' => 'Item', 'column' => 'id', 'required' => false)),
      'campaign_id'         => new sfValidatorDoctrineChoice(array('model' => 'Campaign', 'required' => false)),
      'plaza_id'            => new sfValidatorDoctrineChoice(array('model' => 'Plaza', 'required' => false)),
      'categoria_id'        => new sfValidatorDoctrineChoice(array('model' => 'CategoriaItem', 'required' => false)),
      'tipo_id'             => new sfValidatorDoctrineChoice(array('model' => 'Tipo', 'required' => false)),
      'responsable_id'      => new sfValidatorDoctrineChoice(array('model' => 'sfGuardUser', 'required' => false)),
      'prueba_color'        => new sfValidatorDateTime(array('required' => false)),
      'impresor_id'         => new sfValidatorDoctrineChoice(array('model' => 'Impresor', 'required' => false)),
      'entrada_impresor'    => new sfValidatorDateTime(array('required' => false)),
      'salida_impresor'     => new sfValidatorDateTime(array('required' => false)),
      'mensajeria_id'       => new sfValidatorDoctrineChoice(array('model' => 'Mensajeria', 'required' => false)),
      'guia'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fecha_envio'         => new sfValidatorDateTime(array('required' => false)),
      'fecha_recepcion'     => new sfValidatorDateTime(array('required' => false)),
      'permisionario'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'carroceria'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'compra_directa'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ruta'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'placas'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'economico'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'instalacion'         => new sfValidatorDateTime(array('required' => false)),
      'desmontaje'          => new sfValidatorDateTime(array('required' => false)),
      'evidencia'           => new sfValidatorBoolean(array('required' => false)),
      'fecha_actualizacion' => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('item[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Item';
  }

}
