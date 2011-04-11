<?php if ($sf_user->isAuthenticated()): ?>
<div id="login-status-wrapper">
  <p id="logged_user">
    <span class="inner">
      Bienvenido <?php echo $sf_user->getGuardUser()->getFirstName()." ".$sf_user->getGuardUser()->getLastName(); ?> | <?php echo link_to('Salir','@sf_guard_signout') ?>
    </span>
  </p>
</div>
<?php endif; ?>

<h1>Edit Trapial posts</h1>

<?php include_partial('form', array('form' => $form)) ?>
