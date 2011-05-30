<?php use_javascript('sendmail.js') ?>
<?php use_stylesheet('contact-form.css')?>
<p class="content-title">Escribenos</p>
<div class="content-wrapper" id="contact">
<div id="sendmail"></div>
<div id="text-contact">
<ul id="datos">
  <li><b>Direcci&oacute;n:</b> Cochrane 870 y 890, Concepci&oacute;n</li>
  <li><b>Fono/Fax:</b> (041) 2237384</li>
  <li><b>Email:</b> jardin@mundocantaclaro.cl</li>
  <li><b>Sitio Web:</b> <a href="www.mundocantaclaro.cl">www.mundocantaclaro.cl</a></li>
  <li><b>Facebook: </b><br/><?php echo link_to(image_tag('facebook-icon-48x48.png',array('alt' => 'Encuentranos en Facebook', 'size' => '48x48', 'class' => 'facebook','border'=> '0')),'http://www.facebook.com/mundo.cantaclaro',array('target'=>'_blank')); ?></li>
</ul>
<?php echo image_tag('contact-form-niña.png',array('id'=>'contact-form-ninia')); ?>
</div>
<div id="form-contact-wrapper">
<form action="<?php echo url_for('static/sendmail') ?>" id="form-send" method="POST" autocomplete="off">
  <p><?php echo $form['name']->renderLabel('Tu Nombre',array('class'=>'contact-form-label')); ?></p>
  <p><?php echo $form['name']->render(); ?></p>
  <p><?php echo $form['email']->renderLabel('Tu email',array('class'=>'contact-form-label')); ?></p>
  <p><?php echo $form['email']->render(); ?></p>
  <p><?php echo $form['subject']->renderLabel('Asunto',array('class'=>'contact-form-label')); ?></p>
  <p><?php echo $form['subject']->render(); ?></p>
  <p><?php echo $form['message']->renderLabel('Mensaje',array('class'=>'contact-form-label')); ?></p>
  <p><?php echo $form['message']->render(); ?></p>
  <p><input type="submit" id="form-submit" value="Enviar"/></p>
  <?php echo $form->renderHiddenFields(); ?>
</form>
</div>
</div>
