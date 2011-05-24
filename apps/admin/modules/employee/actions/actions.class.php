<?php

/**
 * employee actions.
 *
 * @package    trapial
 * @subpackage employee
 * @author     Rodrigo Campos H.
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class employeeActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->trapial_employees = Doctrine_Core::getTable('TrapialEmployee')
      ->createQuery('a')
      ->execute();
    $this->Administrativo    = Doctrine_Core::getTable('TrapialEmployee')
      ->createQuery('b')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->trapial_employee = Doctrine_Core::getTable('TrapialEmployee')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->trapial_employee);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new TrapialEmployeeForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new TrapialEmployeeForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($trapial_employee = Doctrine_Core::getTable('TrapialEmployee')->find(array($request->getParameter('id'))), sprintf('Object trapial_employee does not exist (%s).', $request->getParameter('id')));
    $this->form = new TrapialEmployeeForm($trapial_employee);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($trapial_employee = Doctrine_Core::getTable('TrapialEmployee')->find(array($request->getParameter('id'))), sprintf('Object trapial_employee does not exist (%s).', $request->getParameter('id')));
    $this->form = new TrapialEmployeeForm($trapial_employee);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($trapial_employee = Doctrine_Core::getTable('TrapialEmployee')->find(array($request->getParameter('id'))), sprintf('Object trapial_employee does not exist (%s).', $request->getParameter('id')));
    $trapial_employee->delete();

    $this->redirect('employee/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $trapial_employee = $form->save();

      $this->redirect('employee/edit?id='.$trapial_employee->getId());
    }
  }
}
