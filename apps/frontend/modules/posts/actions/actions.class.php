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

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TrapialPostsForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TrapialPostsForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($trapial_posts = Doctrine_Core::getTable('TrapialPosts')->find(array($request->getParameter('id'))), sprintf('Object trapial_posts does not exist (%s).', $request->getParameter('id')));
    $this->form = new TrapialPostsForm($trapial_posts);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($trapial_posts = Doctrine_Core::getTable('TrapialPosts')->find(array($request->getParameter('id'))), sprintf('Object trapial_posts does not exist (%s).', $request->getParameter('id')));
    $this->form = new TrapialPostsForm($trapial_posts);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($trapial_posts = Doctrine_Core::getTable('TrapialPosts')->find(array($request->getParameter('id'))), sprintf('Object trapial_posts does not exist (%s).', $request->getParameter('id')));
    $trapial_posts->delete();

    $this->redirect('posts/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $trapial_posts = $form->save();

      $this->redirect('posts/edit?id='.$trapial_posts->getId());
    }
  }
}
