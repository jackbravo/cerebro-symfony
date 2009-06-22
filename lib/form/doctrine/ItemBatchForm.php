<?php

/**
 * Issue form.
 *
 * @package    form
 * @subpackage Issue
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 6174 2007-11-27 06:22:40Z fabien $
 */
class ItemBatchForm extends ItemForm
{
  public $ids = array();

  public function configure()
  {
    parent::configure();

    $select_widgets = array('categoria_id', 'tipo_id',
      'responsable_id', 'impresor_id', 'mensajeria_id');

    foreach ($select_widgets as $widget)
    {
      $this->widgetSchema[$widget]->setOption('add_empty', '-- no cambiar --');
      $this->validatorSchema[$widget]->setOption('required', false);
      $this->setDefault($widget, '');
    }

    unset($this['guia'], $this['carroceria'],$this['placas'],$this['economico']);
  }

  public function updateObject($values = null)
  {
    $items = new Doctrine_Collection('Item');
    $values = $this->getChangedValues();

    foreach ($this->ids as $id)
    {
      $item = Doctrine::getTable('Item')->find($id);
      $item->fromArray($values);
      $items->add($item);
    }
    $this->object = $items;

    return $items;
  }

  public function getChangedValues()
  {
    $changed_values = array();
    foreach ($this->getValues() as $key => $value)
    {
      if ($value != '')
      {
        $changed_values[$key] = $value;
      }
    }

    return $changed_values;
  }
}
