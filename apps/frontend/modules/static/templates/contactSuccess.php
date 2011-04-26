<?php use_javascript('sendmail.js') ?>
<?php use_stylesheet('contact-form.css')?>
<p class="content-title">Escribenos</p>
<div class="content-wrapper" id="contact">
<div id="sendmail"></div>
<div id="form-contact-wrapper">
<form action="<?php echo url_for('static/sendmail') ?>" id="form-send" method="POST">
  <p><?php echo $form['name']->renderLabel(); ?></p>
  <p><?php echo $form['name']->render(); ?></p>
  <p><?php echo $form['email']->renderLabel(); ?></p>
  <p><?php echo $form['email']->render(); ?></p>
  <p><?php echo $form['subject']->renderLabel(); ?></p>
  <p><?php echo $form['subject']->render(); ?></p>
  <p><?php echo $form['message']->renderLabel(); ?></p>
  <p><?php echo $form['message']->render(); ?></p>
  <p><input type="submit" id="form-submit" value="Enviar"/></p>
  <?php echo $form->renderHiddenFields(); ?>
</form>
</div>
</div>
