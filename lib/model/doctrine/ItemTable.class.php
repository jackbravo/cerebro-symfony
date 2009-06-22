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

  public function getNextPosition($campaign_id, $plaza_id)
  {
    $pos = $this->createQuery('i')
      ->select("MAX(i.position) pos")
      ->where("i.campaign_id = ? AND i.plaza_id = ?")
      ->execute(array($campaign_id, $plaza_id), Doctrine::HYDRATE_SINGLE_SCALAR);
    return $pos + 1;
  }
}
