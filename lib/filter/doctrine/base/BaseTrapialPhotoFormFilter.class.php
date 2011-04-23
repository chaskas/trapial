<?php

/**
 * TrapialPhoto filter form base class.
 *
 * @package    trapial
 * @subpackage filter
 * @author     Rodrigo Campos H.
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTrapialPhotoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'photo_category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TrapialPhotoCategory'), 'add_empty' => true)),
      'photo_filename'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'photo_category_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TrapialPhotoCategory'), 'column' => 'id')),
      'photo_filename'    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('trapial_photo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TrapialPhoto';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'photo_category_id' => 'ForeignKey',
      'photo_filename'    => 'Text',
    );
  }
}
