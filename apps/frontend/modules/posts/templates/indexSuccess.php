<h1 class="News">Noticias Mundo Cantaclaro</h1>
<p class="NewsAddNew"><a href="<?php echo url_for('posts/new') ?>"  class="NewsAddNew">Publicar nueva noticia</a></p>

<?php foreach ($trapial_postss as $trapial_posts): ?>
  <div id="NewsWrapper">
    <p class="NewsTitle"><a href="<?php echo url_for('posts/show?id='.$trapial_posts->getId()) ?>" class="NewsTitle"><?php echo $trapial_posts->getPostTitle() ?></a></p>
    <p class="NewsDate"><?php echo $trapial_posts->getCreatedAt() ?></p>
    <p class="NewsAuthor">Escrito por: <?php echo $trapial_posts->getPostAuthorId() ?></p>
    <p class="NewsContent"><?php echo $trapial_posts->getPostContent() ?></p>
    <!--<p class="NewsSeeComments"><a href="#" class="NewsSeeComments"><?php echo $trapial_posts->getCommentCount() ?> Comentarios</a></p>-->
  </div>
<?php endforeach; ?>


