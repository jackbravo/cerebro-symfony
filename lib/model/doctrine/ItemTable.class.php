<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ItemTable extends Doctrine_Table
{
  public function findIds(array $ids)
  {
    return $this->createQuery('i')
      ->whereIn('i.id', $ids)
      ->execute();
  }
}
