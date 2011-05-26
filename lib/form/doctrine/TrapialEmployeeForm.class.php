<?php

/**
 * TrapialEmployee form.
 *
 * @package    trapial
 * @subpackage form
 * @author     Rodrigo Campos H.
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TrapialEmployeeForm extends BaseTrapialEmployeeForm {

  public function configure() {

    $this->widgetSchema['team'] = new sfWidgetFormChoice(array(
                'choices' => array('Administrativo', 'Educativo', 'Apoyo')
            ));

    $this->widgetSchema['nivel'] = new sfWidgetFormChoice(array(
                'choices' => array('Gatitos', 'Pollitos', 'Leones', 'Cuncunas', 'Ardillas', 'Conejos', 'Cachorros', 'Semilla')
            ));

    $this->widgetSchema['picture'] = new sfWidgetFormInputFileEditable(array(
                'label' => 'Fotograf&iacute;a',
                'file_src' => '/uploads/employees/s_' . $this->getObject()->getPicture(),
                'is_image' => true,
                'edit_mode' => !$this->isNew(),
                'with_delete' => true,
                'delete_label' => 'Borrar Foto',
                'template' => '<div align="center"><br/>%file%<br/><br/>%input%<br/></br>%delete% %delete_label%</div>',
            ));

    $this->validatorSchema['picture'] = new sfValidatorFile(array(
                'mime_types' => 'web_images',
                'path' => sfConfig::get('sf_upload_dir') . '/employees',
                'required' => false,
                'validated_file_class' => 'sfResizedFile',
            ));

    $this->validatorSchema['picture_delete'] = new sfValidatorBoolean();

    $this->widgetSchema->setLabels(array(
        'firstName' => 'Nombre',
        'lastName' => 'Apellido',
        'profession' => 'T&iacute;tulo',
        'ocupation' => 'Cargo',
        'picture' => 'Fotograf&iacute;a',
        'team' => 'Equipo',
        'nivel' => 'Nivel'
    ));
  }

}

