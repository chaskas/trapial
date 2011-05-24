<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
  <!-- Header -->
  <div id="header">
	  <div class="shell">
		  <!-- Logo + Top Nav -->
		  <div id="top">
			  <h1>Administraci&oacute;n</h1>
			  <?php if ($sf_user->isAuthenticated()): ?>
			  <div id="top-navigation">
				  Bienvenido <strong><?php echo $sf_user->getGuardUser()->getName(); ?></strong>
				  <span>|</span>
				  <?php echo link_to('Salir','@sf_guard_signout') ?>
			  </div>
			  <?php endif; ?>
		  </div>
		  <!-- End Logo + Top Nav -->
		
		  <!-- Main Nav -->
                  <?php if ($sf_user->isAuthenticated()): ?>
		  <div id="navigation">
			  <ul>
			      <li><a href="<?php echo url_for('posts/index'); ?>" class="active"><span>Noticias</span></a></li>
			      <li><a href="<?php echo url_for('gallery/index'); ?>"><span>Galer&iacute;a</span></a></li>
                              <li><a href="<?php echo url_for('employee/index'); ?>"><span>Equipos</span></a></li>
			      <li><a href="<?php echo url_for('guard/users'); ?>"><span>Usuarios</span></a></li>
			      <li><a href="<?php echo url_for('guard/groups'); ?>"><span>Grupos</span></a></li>
			  </ul>
		  </div>
                  <?php endif; ?>
		  <!-- End Main Nav -->
	  </div>
  </div>
  <!-- End Header -->
  <!-- Container -->
<div id="container">
	<div class="shell">
		
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
      <?php echo $sf_content ?>
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->
  <!-- Footer -->
  <div id="footer">
	  <div class="shell">
		  <span class="left">&copy; 2010</span>
		  <span class="right">
			  Desarrollado por Rodrigo Campos H.
		  </span>
	  </div>
  </div>
  <!-- End Footer -->
    
  </body>
</html>
