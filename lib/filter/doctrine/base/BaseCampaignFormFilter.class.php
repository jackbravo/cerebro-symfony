<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/doctrine/BaseFormFilterDoctrine.class.php');

/**
 * Campaign filter form base class.
 *
 * @package    filters
 * @subpackage Campaign *
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 11675 2008-09-19 15:21:38Z fabien $
 */
class BaseCampaignFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'              => new sfWidgetFormFilterInput(),
      'vendedor_id'         => new sfWidgetFormDoctrineChoice(array('model' => 'sfGuardUser', 'add_empty' => true)),
      'categoria_id'        => new sfWidgetFormDoctrineChoice(array('model' => 'CategoriaCampaign', 'add_empty' => true)),
      'producto_id'         => new sfWidgetFormDoctrineChoice(array('model' => 'Producto', 'add_empty' => true)),
      'specialty_id'        => new sfWidgetFormDoctrineChoice(array('model' => 'Specialty', 'add_empty' => true)),
      'cliente'             => new sfWidgetFormFilterInput(),
      'orden'               => new sfWidgetFormFilterInput(),
      'facturacion'         => new sfWidgetFormFilterInput(),
      'fecha_inicio'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fecha_cierre'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'activa'              => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'fecha_ingreso'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'fecha_actualizacion' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombre'              => new sfValidatorPass(array('required' => false)),
      'vendedor_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'sfGuardUser', 'column' => 'id')),
      'categoria_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'CategoriaCampaign', 'column' => 'id')),
      'producto_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'Producto', 'column' => 'id')),
      'specialty_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'Specialty', 'column' => 'id')),
      'cliente'             => new sfValidatorPass(array('required' => false)),
      'orden'               => new sfValidatorPass(array('required' => false)),
      'facturacion'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'fecha_inicio'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fecha_cierre'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'activa'              => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'fecha_ingreso'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'fecha_actualizacion' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('campaign_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Campaign';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'nombre'              => 'Text',
      'vendedor_id'         => 'ForeignKey',
      'categoria_id'        => 'ForeignKey',
      'producto_id'         => 'ForeignKey',
      'specialty_id'        => 'ForeignKey',
      'cliente'             => 'Text',
      'orden'               => 'Text',
      'facturacion'         => 'Number',
      'fecha_inicio'        => 'Date',
      'fecha_cierre'        => 'Date',
      'activa'              => 'Boolean',
      'fecha_ingreso'       => 'Date',
      'fecha_actualizacion' => 'Date',
    );
  }
}