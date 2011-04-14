<div id="NewsComplete-wrapper">
  <p class="NewsCompleteTitle"><?php echo $trapial_posts->getPostTitle() ?></p>
  <p class="NewsDate">Publicada por <?php echo $trapial_posts->getPostAuthorId()." el ".$trapial_posts->getCreatedAt() ?></p>
  <p class="NewsCompleteContent"><?php echo $trapial_posts->getPostContent() ?></p>
  <!--<p class="NewsCompleteComment-link"><?php echo $trapial_posts->getCommentCount() ?> Comentarios</p>-->
  <div id="NewsCompleteLinks-wrapper">
    <p class="NewsCompleteBack"><a class="NewsCompleteBack" href="<?php echo url_for('posts/index') ?>">Volver</a></p>
    <?php if ($sf_user->isAuthenticated()): ?>
    <p class="NewsCompleteEdit"><a class="NewsCompleteEdit" href="<?php echo url_for('posts/edit?id='.$trapial_posts->getId()) ?>">Editar</a></p>
    <?php endif; ?>
  </div>
</div>