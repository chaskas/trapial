<?php use_helper('Date'); ?>
<p class="content-title">Noticias Mundo Cantaclaro</p>
<?php if ($sf_user->isAuthenticated()): ?>
<p class="NewsAddNew"><a href="<?php echo url_for('posts/new') ?>"  class="NewsAddNew">Publicar nueva noticia</a></p>
<?php endif; ?>

<?php foreach ($trapial_postss as $trapial_posts): ?>
  <div id="NewsWrapper">
    <p class="NewsTitle"><a href="<?php echo url_for('posts/show?id='.$trapial_posts->getId()) ?>" class="NewsTitle"><?php echo $trapial_posts->getPostTitle() ?></a></p>
    <p class="NewsDate"><?php echo tools::formatDate($trapial_posts->getCreatedAt()); ?></p>
    <p class="NewsAuthor">Escrito por: <?php echo $trapial_posts->getUpdator() ?></p>
    <p class="NewsContent"><?php echo tools::getResume(strip_tags($trapial_posts->getRawValue()->getPostContent())) ?></p>
    <p class="NewsReadMore"><a href="<?php echo url_for('posts/show?id='.$trapial_posts->getId()) ?>" class="NewsReadMore">Leer m&aacute;s</a></p>
  </div>
<?php endforeach; ?>


