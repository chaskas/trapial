<?php

class staticComponents extends sfComponents
{
  public function executeLastestNews()
  {
    $this->news = Doctrine_Core::getTable('TrapialPosts')
      ->createQuery('a')
      ->select('a.post_title','a.post_content')
      ->orderBy('a.created_at DESC')
      ->limit(4)
      ->execute();
  }
}