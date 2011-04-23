<?php

/**
 * category actions.
 *
 * @package    trapial
 * @subpackage category
 * @author     Rodrigo Campos H.
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class categoryActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->trapial_photo_categorys = Doctrine_Core::getTable('TrapialPhotoCategory')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->trapial_photo_category = Doctrine_Core::getTable('TrapialPhotoCategory')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->trapial_photo_category);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TrapialPhotoCategoryForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TrapialPhotoCategoryForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($trapial_photo_category = Doctrine_Core::getTable('TrapialPhotoCategory')->find(array($request->getParameter('id'))), sprintf('Object trapial_photo_category does not exist (%s).', $request->getParameter('id')));
    $this->form = new TrapialPhotoCategoryForm($trapial_photo_category);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($trapial_photo_category = Doctrine_Core::getTable('TrapialPhotoCategory')->find(array($request->getParameter('id'))), sprintf('Object trapial_photo_category does not exist (%s).', $request->getParameter('id')));
    $this->form = new TrapialPhotoCategoryForm($trapial_photo_category);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($trapial_photo_category = Doctrine_Core::getTable('TrapialPhotoCategory')->find(array($request->getParameter('id'))), sprintf('Object trapial_photo_category does not exist (%s).', $request->getParameter('id')));
    $trapial_photo_category->delete();

    $this->redirect('category/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $trapial_photo_category = $form->save();

      $this->redirect('category/edit?id='.$trapial_photo_category->getId());
    }
  }
}
