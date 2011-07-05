<?php

/**
 * TrapialPosts form.
 *
 * @package    trapial
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class TrapialPostsForm extends BaseTrapialPostsForm
{
  public function configure()
  {
    $this->widgetSchema['post_content']= new sfWidgetFormTextareaTinyMCE(array('theme'=>'advanced', 'width'=> 966, 'height'=> 450, 'config' =>
        'theme_advanced_buttons1 : "mybutton,bold,italic,underline,separator,strikethrough,justifyleft,justifycenter,justifyright, justifyfull,bullist,numlist,undo,redo,link,unlink,fontselect,fontsizeselect,forecolor,blockquote",
         theme_advanced_buttons2 : "",
         theme_advanced_buttons3 : "",
         theme_advanced_resizing : true,
         theme_advanced_resizing_min_width : 966,
         theme_advanced_resizing_min_height: 450'));

    $this->widgetSchema['post_file'] = new sfWidgetFormInputFileEditable(array(
                'label' => 'Fotograf&iacute;a',
                'file_src' => '/uploads/docs/' . $this->getObject()->getPostFile(),
                'is_image' => true,
                'edit_mode' => !$this->isNew(),
                'with_delete' => true,
                'delete_label' => 'Borrar',
                'template' => '<div align="center"><br/>%input%<br/></br>%delete% %delete_label%</div>',
            ));

    $this->validatorSchema['post_file'] = new sfValidatorFile(array(
                
                'path' => sfConfig::get('sf_upload_dir') . '/docs',
                'required' => false,
            ));

    $this->validatorSchema['post_file_delete'] = new sfValidatorBoolean();
    
    $this->widgetSchema['created_at']= new sfWidgetFormJQueryDate(array('config' => '{showOn: "button",buttonImage: "/images/calendar.png",buttonImageOnly: true}','culture'=>'es'));
    $this->widgetSchema['created_at']->getOption('date_widget')->setOption('format', '%day%%month%%year%');
    $this->widgetSchema['updated_at']= new sfWidgetFormJQueryDate(array('config' => '{showOn: "button",buttonImage: "/images/calendar.png",buttonImageOnly: true}','culture'=>'es'));
    $this->widgetSchema['updated_at']->getOption('date_widget')->setOption('format', '%day%%month%%year%');

    $this->widgetSchema->setLabels(array(
       'post_title' => 'T&iacute;tulo'
    ));
    unset(
      $this['created_at'],
      $this['updated_at'],
      $this['created_by'],
      $this['updated_by']
    );
  }
}
