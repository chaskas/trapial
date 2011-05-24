<?php

/**
 * TrapialEmployees form base class.
 *
 * @method TrapialEmployees getObject() Returns the current form's model object
 *
 * @package    trapial
 * @subpackage form
 * @author     Rodrigo Campos H.
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTrapialEmployeesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'firstName'  => new sfWidgetFormInputText(),
      'lastName'   => new sfWidgetFormInputText(),
      'profession' => new sfWidgetFormInputText(),
      'position'   => new sfWidgetFormInputText(),
      'picture'    => new sfWidgetFormInputText(),
      'team'       => new sfWidgetFormInputText(),
      'group'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'firstName'  => new sfValidatorPass(),
      'lastName'   => new sfValidatorPass(),
      'profession' => new sfValidatorPass(array('required' => false)),
      'position'   => new sfValidatorPass(),
      'picture'    => new sfValidatorPass(),
      'team'       => new sfValidatorPass(),
      'group'      => new sfValidatorPass(),
    ));

    $this->widgetSchema->setNameFormat('trapial_employees[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'TrapialEmployees';
  }

}
