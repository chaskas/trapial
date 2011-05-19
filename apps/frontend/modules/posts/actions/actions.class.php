<?php

/**
 * posts actions.
 *
 * @package    trapial
 * @subpackage posts
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class postsActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->trapial_postss = Doctrine_Core::getTable('TrapialPosts')
      ->createQuery('a')
      ->orderBy('a.created_at DESC')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->trapial_posts = Doctrine_Core::getTable('TrapialPosts')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->trapial_posts);
  }
}
