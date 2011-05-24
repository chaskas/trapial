<?php

/**
 * TrapialEmployee form.
 *
 * @package    trapial
 * @subpackage form
 * @author     Rodrigo Campos H.
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TrapialEmployeeForm extends BaseTrapialEmployeeForm
{
  public function configure()
  {

    $this->widgetSchema['team'] = new sfWidgetFormChoice(array(
        'choices' => array('Administrativo','Educativo','Apoyo')
    ));

    $this->widgetSchema['nivel'] = new sfWidgetFormChoice(array(
        'choices' => array('Gatitos','Pollitos','Leones','Cuncunas','Ardillas','Conejos','Cachorros','Semilla')
    ));

    $this->widgetSchema['picture']= new sfWidgetFormInputFile();
    $this->validatorSchema['picture'] = new sfValidatorFile(array(
        'mime_types' => 'web_images',
        'path' => sfConfig::get('sf_upload_dir').'/employees',
    ));

    $this->widgetSchema->setLabels(array(
        'firstName'  => 'Nombre',
        'lastName'   => 'Apellido',
        'profession' => 'T&iacute;tulo',
        'ocupation'  => 'Cargo',
        'picture'    => 'Fotograf&iacute;a',
        'team'       => 'Equipo',
        'nivel'      => 'Nivel'
    ));
 }
}
