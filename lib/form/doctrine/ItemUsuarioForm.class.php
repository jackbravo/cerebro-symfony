<?php

class ItemUsuarioForm extends ItemForm
{
  public function configure()
  {
    parent::configure();
    unset($this['responsable_id']);
  }
}
