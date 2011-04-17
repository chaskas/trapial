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
    $this->widgetSchema['post_content']= new sfWidgetFormTextareaTinyMCE(array('theme'=>'advanced', 'width'  => 550,'height' => 350,'config' =>
        'theme_advanced_buttons1 : "mybutton,bold,italic,underline,separator,strikethrough,justifyleft,justifycenter,justifyright, justifyfull,bullist,numlist,undo,redo,link,unlink,fontselect,fontsizeselect,forecolor,blockquote",
         theme_advanced_buttons2 : "",
         theme_advanced_buttons3 : ""'));

    $this->widgetSchema['created_at']= new sfWidgetFormJQueryDate(array('config' => '{showOn: "button",buttonImage: "/images/calendar.png",buttonImageOnly: true}','culture'=>'es'));
    $this->widgetSchema['created_at']->getOption('date_widget')->setOption('format', '%day%%month%%year%');
    $this->widgetSchema['updated_at']= new sfWidgetFormJQueryDate(array('config' => '{showOn: "button",buttonImage: "/images/calendar.png",buttonImageOnly: true}','culture'=>'es'));
    $this->widgetSchema['updated_at']->getOption('date_widget')->setOption('format', '%day%%month%%year%');
  }
}
