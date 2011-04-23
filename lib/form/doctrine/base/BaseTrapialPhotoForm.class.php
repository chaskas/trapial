<?php

/**
 * TrapialPhoto form base class.
 *
 * @method TrapialPhoto getObject() Returns the current form's model object
 *
 * @package    trapial
 * @subpackage form
 * @author     Rodrigo Campos H.
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTrapialPhotoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'photo_category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TrapialPhotoCategory'), 'add_empty' => false)),
      'photo_filename'    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'photo_category_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TrapialPhotoCategory'))),
      'photo_filename'    => new sfValidatorPass(),
    ));

    $this->widgetSchema->setNameFormat('trapial_photo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TrapialPhoto';
  }

}
