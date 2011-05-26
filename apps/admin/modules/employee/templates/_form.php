<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<!-- Box -->
<div class="box">
	<!-- Box Head -->
	<div class="box-head">
		<h2>Personal</h2>
	</div>
	<!-- End Box Head -->

<form action="<?php echo url_for('employee/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>

<div class="form">
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>

<!--<p><?php //echo "<span class=\"News\">".$form['post_title']->renderLabel()."</span>"; ?></p>
<p><?php //echo $form['post_title']->render(array('class'=>'field size1')); ?></p>
<p><?php //echo $form['post_content']->render(array('class'=>'field size1','style'=>'width:948px;')); ?></p>-->
<div class="employee-wrapper">
<div class="picture">
      <p class="inline-field">
        <label><?php echo $form['picture']->renderLabel(); ?></label>
        <?php echo $form['picture']->render(); ?>
      </p>
</div>
<div class="fields">
      <p class="inline-field">
        <label><?php echo $form['firstName']->renderLabel(); ?></label>
        <?php echo $form['firstName']->render(array('class'=>'field size4')); ?>
      </p>
      <p class="inline-field">
        <label><?php echo $form['lastName']->renderLabel(); ?></label>
        <?php echo $form['lastName']->render(array('class'=>'field size4')); ?>
      </p>

      <p class="inline-field">
        <label><?php echo $form['profession']->renderLabel(); ?></label>
        <?php echo $form['profession']->render(array('class'=>'field size4')); ?>
      </p>
      <p class="inline-field">
        <label><?php echo $form['ocupation']->renderLabel(); ?></label>
        <?php echo $form['ocupation']->render(array('class'=>'field size4')); ?>
      </p>

      <p class="inline-field">
        <label><?php echo $form['team']->renderLabel(); ?></label>
        <?php echo $form['team']->render(array('class'=>'field size4')); ?>
      </p>
      <p class="inline-field">
        <label><?php echo $form['nivel']->renderLabel(); ?></label>
        <?php echo $form['nivel']->render(array('class'=>'field size4')); ?>
      </p>
</div>
<?php echo $form->renderHiddenFields(); ?>
</div>
</div>
<!-- Form Buttons -->
<div class="buttons">
<a href="<?php echo url_for('employee/index') ?>" class="NewsCompleteBack">Volver</a>
<?php if (!$form->getObject()->isNew()): ?>
  &nbsp;<?php echo link_to('Borrar', 'employee/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => '¿Estas seguro?', 'class'=> 'NewsCompleteBack')) ?>
<?php endif; ?>
	<input type="submit" class="button" value="Guardar" />
</div>
<!-- End Form Buttons -->
</form>
</div>
<!-- End Box -->