<?php

/**
 * TrapialEmployee filter form base class.
 *
 * @package    trapial
 * @subpackage filter
 * @author     Rodrigo Campos H.
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTrapialEmployeeFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'firstName'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lastName'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'profession' => new sfWidgetFormFilterInput(),
      'ocupation'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'picture'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'team'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nivel'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'firstName'  => new sfValidatorPass(array('required' => false)),
      'lastName'   => new sfValidatorPass(array('required' => false)),
      'profession' => new sfValidatorPass(array('required' => false)),
      'ocupation'  => new sfValidatorPass(array('required' => false)),
      'picture'    => new sfValidatorPass(array('required' => false)),
      'team'       => new sfValidatorPass(array('required' => false)),
      'nivel'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('trapial_employee_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TrapialEmployee';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'firstName'  => 'Text',
      'lastName'   => 'Text',
      'profession' => 'Text',
      'ocupation'  => 'Text',
      'picture'    => 'Text',
      'team'       => 'Text',
      'nivel'      => 'Text',
    );
  }
}
