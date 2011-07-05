<div id="NewsComplete-wrapper">
  <p class="NewsCompleteTitle"><?php echo $trapial_posts->getPostTitle() ?></p>
  <p class="NewsDate">Publicada por <?php echo $trapial_posts->getUpdator()." el ".tools::formatDate($trapial_posts->getCreatedAt()) ?></p>
  <div id="NewsCompleteContent-wrapper"><div id="NewsCompleteContent"><?php echo $trapial_posts->getRawValue()->getPostContent(); ?></div></div>
  <?php if($trapial_posts->getPostFile() != NULL) : ?>
    <p class="NewsCompleteTitle"><a href="/uploads/docs/<?php echo $trapial_posts->getPostFile(); ?>" class="NewsDate">Bajar Adjuntos</a></p>
  <?php endif; ?>
  <div id="NewsCompleteLinks-wrapper">
    <p class="NewsCompleteBack"><a class="NewsCompleteBack" href="<?php echo url_for('posts/index') ?>">Volver</a></p>
  </div>
</div>
