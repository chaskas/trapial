<?php

/**
 * TrapialPosts form base class.
 *
 * @method TrapialPosts getObject() Returns the current form's model object
 *
 * @package    trapial
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTrapialPostsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'post_author'   => new sfWidgetFormInputText(),
      'post_content'  => new sfWidgetFormInputText(),
      'post_title'    => new sfWidgetFormInputText(),
      'comment_count' => new sfWidgetFormInputText(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'post_author'   => new sfValidatorPass(),
      'post_content'  => new sfValidatorPass(),
      'post_title'    => new sfValidatorPass(),
      'comment_count' => new sfValidatorPass(),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'TrapialPosts', 'column' => array('post_author')))
    );

    $this->widgetSchema->setNameFormat('trapial_posts[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TrapialPosts';
  }

}
