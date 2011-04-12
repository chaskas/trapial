<?php

/**
 * TrapialComments filter form base class.
 *
 * @package    trapial
 * @subpackage filter
 * @author     Rodrigo Campos H.
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTrapialCommentsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'comment_post_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('TrapialPosts'), 'add_empty' => true)),
      'comment_author'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comment_author_email' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comment_author_ip'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comment_content'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'comment_post_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('TrapialPosts'), 'column' => 'id')),
      'comment_author'       => new sfValidatorPass(array('required' => false)),
      'comment_author_email' => new sfValidatorPass(array('required' => false)),
      'comment_author_ip'    => new sfValidatorPass(array('required' => false)),
      'comment_content'      => new sfValidatorPass(array('required' => false)),
      'created_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('trapial_comments_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TrapialComments';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'comment_post_id'      => 'ForeignKey',
      'comment_author'       => 'Text',
      'comment_author_email' => 'Text',
      'comment_author_ip'    => 'Text',
      'comment_content'      => 'Text',
      'created_at'           => 'Date',
      'updated_at'           => 'Date',
    );
  }
}
