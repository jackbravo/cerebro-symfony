<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BasePerfil extends sfDoctrineRecord
{
  public function setTableDefinition()
  {
    $this->setTableName('perfil');
    $this->hasColumn('id', 'integer', 4, array('type' => 'integer', 'primary' => true, 'autoincrement' => true, 'length' => '4'));
    $this->hasColumn('nombre', 'string', 255, array('type' => 'string', 'length' => '255'));
    $this->hasColumn('correo', 'string', 255, array('type' => 'string', 'length' => '255'));
    $this->hasColumn('telefono', 'string', 255, array('type' => 'string', 'length' => '255'));
    $this->hasColumn('user_id', 'integer', 4, array('type' => 'integer', 'length' => '4'));
  }

  public function setUp()
  {
    $this->hasOne('sfGuardUser as User', array('local' => 'user_id',
                                               'foreign' => 'id'));
  }
}