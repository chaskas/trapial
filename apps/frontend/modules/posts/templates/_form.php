<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div id="NewsComplete-wrapper">

<form action="<?php echo url_for('posts/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>

<p><?php echo "<span class=\"News\">".$form['post_title']->renderLabel()."</span>"; ?></p>
<p><?php echo $form['post_title']->render(array('class'=>'post-title-input','style'=>'width:823px')); ?></p>
<p><?php echo $form['post_content']->render(array('class'=>'login-username-input')); ?></p>
<?php echo $form->renderHiddenFields(); ?>

<div id="NewsCompleteLinks-wrapper">
<p class="NewsCompleteBack"><a href="<?php echo url_for('posts/index') ?>" class="NewsCompleteBack">Volver</a>
<?php if (!$form->getObject()->isNew()): ?>
  &nbsp;<?php echo link_to('Borrar', 'posts/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => '¿Estas seguro?', 'class'=> 'NewsCompleteBack')) ?>
<?php endif; ?>
</p>
<p class="NewsCompleteEditButton"><input type="submit" value="Guardar" class="NewsEditSubmit"/></p>
</div>
</form>
</div>