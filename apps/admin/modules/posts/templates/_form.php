<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>
<?php use_javascript('tiny_mce/tiny_mce.js') ?>
<!-- Box -->
<div class="box">
	<!-- Box Head -->
	<div class="box-head">
		<h2>Noticia</h2>
	</div>
	<!-- End Box Head -->

<form action="<?php echo url_for('posts/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>

<div class="form">
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>

<p><?php echo "<span class=\"News\">".$form['post_title']->renderLabel()."</span>"; ?></p>
<p><?php echo $form['post_title']->render(array('class'=>'field size1')); ?></p>
<p><?php echo $form['post_content']->render(array('class'=>'field size1','style'=>'width:948px;')); ?></p>
<p><?php echo $form['post_file']->render(array('class'=>'field size1')); ?></p>
<?php echo $form->renderHiddenFields(); ?>

</div>
<!-- Form Buttons -->
<div class="buttons">
<a href="<?php echo url_for('posts/index') ?>" class="NewsCompleteBack">Volver</a>
<?php if (!$form->getObject()->isNew()): ?>
  &nbsp;<?php echo link_to('Borrar', 'posts/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => '¿Estas seguro?', 'class'=> 'NewsCompleteBack')) ?>
<?php endif; ?>
	<input type="submit" class="button" value="Guardar" />
</div>
<!-- End Form Buttons -->
</form>
</div>
<!-- End Box -->
