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
    $this->validatorSchema['category_name'] = new sfValidatorString();
    unset(
      $this['created_at'],
      $this['updated_at']
    );
  }
}
