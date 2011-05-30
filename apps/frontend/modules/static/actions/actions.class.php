<?php

/**
 * static actions.
 *
 * @package    trapial
 * @subpackage static
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class staticActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
  }
  public function executeResena(sfWebRequest $request)
  {
  }
  public function executeFamilia(sfWebRequest $request)
  {
    $this->admins = Doctrine_Core::getTable('TrapialEmployee')
      ->createQuery('a')
      ->select('a.firstName','a.lastName','a.ocupation','a.profession','a.picture')
      ->where('a.team = 0')
      ->orderBy('a.firstName DESC')
      ->execute();

    $this->gatitos = Doctrine_Core::getTable('TrapialEmployee')
      ->createQuery('a')
      ->select('a.firstName','a.lastName','a.ocupation','a.profession','a.picture')
      ->where('a.team = 1')
      ->andWhere('a.nivel = 0')
      ->orderBy('a.firstName DESC')
      ->execute();

    $this->pollitos = Doctrine_Core::getTable('TrapialEmployee')
      ->createQuery('a')
      ->select('a.firstName','a.lastName','a.ocupation','a.profession','a.picture')
      ->where('a.team = 1')
      ->andWhere('a.nivel = 1')
      ->orderBy('a.firstName DESC')
      ->execute();

    $this->leones = Doctrine_Core::getTable('TrapialEmployee')
      ->createQuery('a')
      ->select('a.firstName','a.lastName','a.ocupation','a.profession','a.picture')
      ->where('a.team = 1')
      ->andWhere('a.nivel = 2')
      ->orderBy('a.firstName DESC')
      ->execute();

    $this->cuncunas = Doctrine_Core::getTable('TrapialEmployee')
      ->createQuery('a')
      ->select('a.firstName','a.lastName','a.ocupation','a.profession','a.picture')
      ->where('a.team = 1')
      ->andWhere('a.nivel = 3')
      ->orderBy('a.firstName DESC')
      ->execute();

    $this->ardillas = Doctrine_Core::getTable('TrapialEmployee')
      ->createQuery('a')
      ->select('a.firstName','a.lastName','a.ocupation','a.profession','a.picture')
      ->where('a.team = 1')
      ->andWhere('a.nivel = 4')
      ->orderBy('a.firstName DESC')
      ->execute();

    $this->conejos = Doctrine_Core::getTable('TrapialEmployee')
      ->createQuery('a')
      ->select('a.firstName','a.lastName','a.ocupation','a.profession','a.picture')
      ->where('a.team = 1')
      ->andWhere('a.nivel = 5')
      ->orderBy('a.firstName DESC')
      ->execute();

    $this->cachorros = Doctrine_Core::getTable('TrapialEmployee')
      ->createQuery('a')
      ->select('a.firstName','a.lastName','a.ocupation','a.profession','a.picture')
      ->where('a.team = 1')
      ->andWhere('a.nivel = 6')
      ->orderBy('a.firstName DESC')
      ->execute();

    $this->semillas = Doctrine_Core::getTable('TrapialEmployee')
      ->createQuery('a')
      ->select('a.firstName','a.lastName','a.ocupation','a.profession','a.picture')
      ->where('a.team = 1')
      ->andWhere('a.nivel = 7')
      ->orderBy('a.firstName DESC')
      ->execute();

    $this->apoyos = Doctrine_Core::getTable('TrapialEmployee')
      ->createQuery('a')
      ->select('a.firstName','a.lastName','a.ocupation','a.profession','a.picture')
      ->where('a.team = 2')
      ->orderBy('a.firstName DESC')
      ->execute();

  }
  public function executeLocation(sfWebRequest $request)
  {
  }
  public function executeJornadas(sfWebRequest $request)
  {
  }
  public function executeHorarios(sfWebRequest $request)
  {
  }
  public function executeContact(sfWebRequest $request)
  {
    $this->form = new ContactForm();
  }
  public function executeSendmail(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('POST'));

    $name     = $request->getParameter('name');
    $email    = $request->getParameter('email');
    $subject  = $request->getParameter('subject');
    $pre_message  = $request->getParameter('message');

    $message = $name."\n".$email."\n\nDice:\n\nAsunto: ".$subject."\n\n".$pre_message;

    $mensaje = Swift_Message::newInstance()
      ->setFrom($email)
      ->setTo('mr.chaskas@gmail.com') //CAMBIAR AL CORREO DE DESTINO DEFINITIVO
      ->setSubject('Nuevo mensaje desde www.mundocantaclaro.cl')
      ->setBody($message)
    ;

    $this->getMailer()->send($mensaje);
    
    $this->getResponse()->setContent('El mensaje ha sido enviado satisfactoriamente...');
    
    return sfView::NONE;
  }
}
