<div id="NewsComplete-wrapper">
  <p class="NewsCompleteTitle"><?php echo $trapial_posts->getPostTitle() ?></p>
  <p class="NewsDate">Publicada por <?php echo $trapial_posts->getUpdator()." el ".tools::formatDate($trapial_posts->getCreatedAt()) ?></p>
  <div id="NewsCompleteContent-wrapper"><div id="NewsCompleteContent"><?php echo $trapial_posts->getRawValue()->getPostContent(); ?></div></div>
  <div id="NewsCompleteLinks-wrapper">
    <p class="NewsCompleteBack"><a class="NewsCompleteBack" href="<?php echo url_for('posts/index') ?>">Volver</a></p>
    <?php if ($sf_user->isAuthenticated()): ?>
    <p class="NewsCompleteEdit"><a class="NewsCompleteEdit" href="<?php echo url_for('posts/edit?id='.$trapial_posts->getId()) ?>">Editar</a></p>
    <?php endif; ?>
  </div>
</div>
