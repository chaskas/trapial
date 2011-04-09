<?php

/**
 * TrapialComments form base class.
 *
 * @method TrapialComments getObject() Returns the current form's model object
 *
 * @package    trapial
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTrapialCommentsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'comment_post_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TrapialPosts'), 'add_empty' => false)),
      'comment_author'       => new sfWidgetFormInputText(),
      'comment_author_email' => new sfWidgetFormInputText(),
      'comment_author_ip'    => new sfWidgetFormInputText(),
      'comment_content'      => new sfWidgetFormInputText(),
      'created_at'           => new sfWidgetFormDateTime(),
      'updated_at'           => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'comment_post_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('TrapialPosts'))),
      'comment_author'       => new sfValidatorPass(),
      'comment_author_email' => new sfValidatorPass(array('required' => false)),
      'comment_author_ip'    => new sfValidatorPass(array('required' => false)),
      'comment_content'      => new sfValidatorPass(),
      'created_at'           => new sfValidatorDateTime(),
      'updated_at'           => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'TrapialComments', 'column' => array('comment_post_id')))
    );

    $this->widgetSchema->setNameFormat('trapial_comments[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TrapialComments';
  }

}
