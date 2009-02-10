<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/doctrine/BaseFormFilterDoctrine.class.php');

/**
 * Item filter form base class.
 *
 * @package    filters
 * @subpackage Item *
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 11675 2008-09-19 15:21:38Z fabien $
 */
class BaseItemFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'plaza_id'            => new sfWidgetFormDoctrineChoice(array('model' => 'Plaza', 'add_empty' => true)),
      'categoria_id'        => new sfWidgetFormDoctrineChoice(array('model' => 'CategoriaItem', 'add_empty' => true)),
      'tipo_id'             => new sfWidgetFormDoctrineChoice(array('model' => 'Tipo', 'add_empty' => true)),
      'responsable_id'      => new sfWidgetFormFilterInput(),
      'prueba_color'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'impresor_id'         => new sfWidgetFormDoctrineChoice(array('model' => 'Impresor', 'add_empty' => true)),
      'entrada_impresor'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'salida_impresor'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'mensajeria_id'       => new sfWidgetFormDoctrineChoice(array('model' => 'Mensajeria', 'add_empty' => true)),
      'guia'                => new sfWidgetFormFilterInput(),
      'fecha_envio'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'fecha_recepcion'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'permisionario'       => new sfWidgetFormFilterInput(),
      'carroceria'          => new sfWidgetFormFilterInput(),
      'compra_directa'      => new sfWidgetFormFilterInput(),
      'ruta'                => new sfWidgetFormFilterInput(),
      'placas'              => new sfWidgetFormFilterInput(),
      'economico'           => new sfWidgetFormFilterInput(),
      'instalacion'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'desmontaje'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'evidencia'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'fecha_actualizacion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'plaza_id'            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'Plaza', 'column' => 'id')),
      'categoria_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'CategoriaItem', 'column' => 'id')),
      'tipo_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'Tipo', 'column' => 'id')),
      'responsable_id'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'prueba_color'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'impresor_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'Impresor', 'column' => 'id')),
      'entrada_impresor'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'salida_impresor'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'mensajeria_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'Mensajeria', 'column' => 'id')),
      'guia'                => new sfValidatorPass(array('required' => false)),
      'fecha_envio'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fecha_recepcion'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'permisionario'       => new sfValidatorPass(array('required' => false)),
      'carroceria'          => new sfValidatorPass(array('required' => false)),
      'compra_directa'      => new sfValidatorPass(array('required' => false)),
      'ruta'                => new sfValidatorPass(array('required' => false)),
      'placas'              => new sfValidatorPass(array('required' => false)),
      'economico'           => new sfValidatorPass(array('required' => false)),
      'instalacion'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'desmontaje'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'evidencia'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'fecha_actualizacion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('item_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Item';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'plaza_id'            => 'ForeignKey',
      'categoria_id'        => 'ForeignKey',
      'tipo_id'             => 'ForeignKey',
      'responsable_id'      => 'Number',
      'prueba_color'        => 'Date',
      'impresor_id'         => 'ForeignKey',
      'entrada_impresor'    => 'Date',
      'salida_impresor'     => 'Date',
      'mensajeria_id'       => 'ForeignKey',
      'guia'                => 'Text',
      'fecha_envio'         => 'Date',
      'fecha_recepcion'     => 'Date',
      'permisionario'       => 'Text',
      'carroceria'          => 'Text',
      'compra_directa'      => 'Text',
      'ruta'                => 'Text',
      'placas'              => 'Text',
      'economico'           => 'Text',
      'instalacion'         => 'Date',
      'desmontaje'          => 'Date',
      'evidencia'           => 'Boolean',
      'fecha_actualizacion' => 'Date',
    );
  }
}