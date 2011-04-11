<?php use_helper('I18N') ?>
<div id="login-wrapper">
<h1 class="login-form-title"><?php echo __('Inicie Sesi&oacute;n', null, 'sf_guard') ?></h1>

<?php echo get_partial('sfGuardAuth/signin_form', array('form' => $form)) ?>
</div>