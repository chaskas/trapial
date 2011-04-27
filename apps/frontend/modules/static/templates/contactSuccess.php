<?php use_javascript('sendmail.js') ?>
<?php use_stylesheet('contact-form.css')?>
<p class="content-title">Escribenos</p>
<div class="content-wrapper" id="contact">
<div id="sendmail"></div>
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
