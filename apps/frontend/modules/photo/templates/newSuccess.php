<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" type="text/css" />
<?php use_stylesheet('../js/plupload/js/jquery.ui.plupload/css/jquery.ui.plupload.css') ?>

<?php use_javascript('jquery-ui.min.js') ?>
<?php use_javascript('browserplus-min.js') ?>
<?php use_javascript('plupload/js/plupload.js') ?>
<?php use_javascript('plupload/js/plupload.gears.js') ?>
<?php use_javascript('plupload/js/plupload.silverlight.js') ?>
<?php use_javascript('plupload/js/plupload.flash.js') ?>
<?php use_javascript('plupload/js/plupload.browserplus.js') ?>
<?php use_javascript('plupload/js/plupload.html4.js') ?>
<?php use_javascript('plupload/js/plupload.html5.js') ?>
<?php use_javascript('plupload/js/jquery.ui.plupload/jquery.ui.plupload.js') ?>
<?php use_javascript('upload.js') ?>

<h1>New Trapial photo</h1>

<form  method="post" action="dump.php">
	<div id="uploader">
		<p>You browser doesn't have Flash, Silverlight, Gears, BrowserPlus or HTML5 support.</p>
	</div>
</form>

<?php include_partial('form', array('form' => $form)) ?>
