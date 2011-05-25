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
                'file_src' => '/uploads/employees/' . '200x200_' . $this->getObject()->getId().'.jpg',
                'is_image' => true,
                'edit_mode' => !$this->isNew(),
                'with_delete' => true,
                'delete_label' => 'Borrar',
                'template' => '<div>%file% %input%<br/>%delete% %delete_label%</div>',
            ));

    $this->validatorSchema['picture'] = new sfValidatorFile(array(
                'mime_types' => 'web_images',
                'path' => sfConfig::get('sf_upload_dir') . '/employees',
                'required' => false
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

  protected function doSave($con = null) {
    $upload = $this->getValue('picture');
    if ($upload) {
      $filename = '200x200_'.$this->getObject()->getId().$upload->getExtension($upload->getOriginalExtension());
      //$filename = '200x200_' . $this->getObject()->getPicture();
      $filepath = sfConfig::get('sf_upload_dir') . '/employees/' . $filename;
      $oldfilepath = sfConfig::get('sf_upload_dir') . '/employees/' . $this->getObject()->getPicture();
      if (is_file($oldfilepath)) {
        unlink($oldfilepath);
      }
      $thumbnail = new sfThumbnail(200,200);
      $thumbnail->loadFile($upload->getTempname());
      $thumbnail->save($filepath);
    }
    return parent::doSave($con);
  }

  public function updateObject($values = null) {
    $object = parent::updateObject($values);
    $object->setPicture(str_replace(
                    sfConfig::get('sf_upload_dir').'/employees', '',
                    $object->getPicture()));
    return $object;
  }

}
