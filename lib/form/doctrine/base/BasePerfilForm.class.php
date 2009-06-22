<?php

/**
 * Perfil form base class.
 *
 * @package    form
 * @subpackage perfil
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 8508 2008-04-17 17:39:15Z fabien $
 */
class BasePerfilForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'nombre'   => new sfWidgetFormInput(),
      'correo'   => new sfWidgetFormInput(),
      'telefono' => new sfWidgetFormInput(),
      'user_id'  => new sfWidgetFormDoctrineChoice(array('model' => 'sfGuardUser', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorDoctrineChoice(array('model' => 'Perfil', 'column' => 'id', 'required' => false)),
      'nombre'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'correo'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'telefono' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'user_id'  => new sfValidatorDoctrineChoice(array('model' => 'sfGuardUser', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('perfil[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Perfil';
  }

}
