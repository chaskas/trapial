<?php use_helper('Date'); ?>
<h1 class="News">Noticias Mundo Cantaclaro</h1>
<?php if ($sf_user->isAuthenticated()): ?>
<p class="NewsAddNew"><a href="<?php echo url_for('posts/new') ?>"  class="NewsAddNew">Publicar nueva noticia</a></p>
<?php endif; ?>

<?php foreach ($trapial_postss as $trapial_posts): ?>
  <div id="NewsWrapper">
    <p class="NewsTitle"><a href="<?php echo url_for('posts/show?id='.$trapial_posts->getId()) ?>" class="NewsTitle"><?php echo $trapial_posts->getPostTitle() ?></a></p>
    <p class="NewsDate"><?php echo tools::formatDate($trapial_posts->getCreatedAt()); ?></p>
    <p class="NewsAuthor">Escrito por: <?php echo $trapial_posts->getSfGuardUser() ?></p>
    <p class="NewsContent"><?php echo tools::getResume(strip_tags($trapial_posts->getRawValue()->getPostContent())) ?></p>
    <p class="NewsReadMore"><a href="<?php echo url_for('posts/show?id='.$trapial_posts->getId()) ?>" class="NewsReadMore">Leer m&aacute;s</a></p>
    <!--<p class="NewsSeeComments"><a href="#" class="NewsSeeComments"><?php echo $trapial_posts->getCommentCount() ?> Comentarios</a></p>-->
  </div>
<?php endforeach; ?>


