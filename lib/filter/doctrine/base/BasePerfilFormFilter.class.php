<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/doctrine/BaseFormFilterDoctrine.class.php');

/**
 * Perfil filter form base class.
 *
 * @package    filters
 * @subpackage Perfil *
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 11675 2008-09-19 15:21:38Z fabien $
 */
class BasePerfilFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'   => new sfWidgetFormFilterInput(),
      'correo'   => new sfWidgetFormFilterInput(),
      'telefono' => new sfWidgetFormFilterInput(),
      'user_id'  => new sfWidgetFormDoctrineChoice(array('model' => 'sfGuardUser', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'nombre'   => new sfValidatorPass(array('required' => false)),
      'correo'   => new sfValidatorPass(array('required' => false)),
      'telefono' => new sfValidatorPass(array('required' => false)),
      'user_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'sfGuardUser', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('perfil_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Perfil';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'nombre'   => 'Text',
      'correo'   => 'Text',
      'telefono' => 'Text',
      'user_id'  => 'ForeignKey',
    );
  }
}