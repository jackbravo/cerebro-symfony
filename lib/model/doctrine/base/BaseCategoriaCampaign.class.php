<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseCategoriaCampaign extends sfDoctrineRecord
{
  public function setTableDefinition()
  {
    $this->setTableName('categoria_campaign');
    $this->hasColumn('id', 'integer', 4, array('type' => 'integer', 'primary' => true, 'autoincrement' => true, 'length' => '4'));
    $this->hasColumn('nombre', 'string', 255, array('type' => 'string', 'length' => '255'));
  }

  public function setUp()
  {
    $this->hasMany('Campaign as Campaigns', array('local' => 'id',
                                                  'foreign' => 'categoria_id'));
  }
}