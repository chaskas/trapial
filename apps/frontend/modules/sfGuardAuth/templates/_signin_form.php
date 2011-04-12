<?php use_helper('I18N') ?>

<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">

<?php echo "<span class=\"login-form-user\">".$form['username']->renderLabel()."</span>"; ?>
<?php echo $form['username']->render(array('class'=>'login-username-input')); ?>
<?php echo "<span class=\"login-form-user\">".$form['password']->renderLabel()."</span>"; ?>
<?php echo $form['password']->render(array('class'=>'login-password-input')); ?>
<?php echo $form->renderHiddenFields(); ?>



<input type="submit" value="<?php echo __('Login', null, 'sf_guard') ?>" class="form-login-submit"/>

<?php $routes = $sf_context->getRouting()->getRoutes() ?>
<?php if (isset($routes['sf_guard_forgot_password'])): ?>
  <a href="<?php echo url_for('@sf_guard_forgot_password') ?>"><?php echo __('Forgot your password?', null, 'sf_guard') ?></a>
<?php endif; ?>

<?php if (isset($routes['sf_guard_register'])): ?>
  &nbsp; <a href="<?php echo url_for('@sf_guard_register') ?>"><?php echo __('Want to register?', null, 'sf_guard') ?></a>
<?php endif; ?>

</form>