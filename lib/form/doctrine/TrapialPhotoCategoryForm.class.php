<?php

/**
 * TrapialPhotoCategory form.
 *
 * @package    trapial
 * @subpackage form
 * @author     Rodrigo Campos H.
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TrapialPhotoCategoryForm extends BaseTrapialPhotoCategoryForm
{
  public function configure()
  {
    $subForm = new sfForm();
    for ($i = 0; $i < 2; $i++)
    {
      $TrapialPhoto = new TrapialPhoto();
      $TrapialPhoto->TrapialPhotoCategory = $this->getObject();

      $form = new TrapialPhotoForm($TrapialPhoto);
   
      $subForm->embedForm($i, $form);
    }
    $this->embedForm('newPhotos', $subForm);
    
    $this->validatorSchema['category_name'] = new sfValidatorString();
    unset(
      $this['created_at'],
      $this['updated_at']
    );
  }
}
