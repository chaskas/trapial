<?php

/**
 * TrapialPhoto form.
 *
 * @package    trapial
 * @subpackage form
 * @author     Rodrigo Campos H.
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TrapialPhotoForm extends BaseTrapialPhotoForm
{
  public function configure()
  {
    $this->setWidget('photo_filename', new sfWidgetFormInputFile());
    $this->setValidator('photo_filename', new sfValidatorFile(array(
      'mime_types' => 'web_images',
      'path' => sfConfig::get('sf_upload_dir').'/photos',
    )));
  }
}
