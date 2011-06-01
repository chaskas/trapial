<?php use_stylesheet('static/lastestNews'); ?>
<div>
  <h1 class="lastest-news-h1">Noticias</h1>
  <ul class="lastest-news-ul">
  <?php foreach($news as $new): ?>
    <li class="lastest-news-li">
      <h3 class="lastest-news-span-title"><?php echo link_to($new->getPostTitle(),'posts/show?id='.$new->getId(),array('class'=>'lastest-news-a')) ?></h3>
      <p class="lastest-news-p">
        <?php echo tools::getResumeSideBar(strip_tags($new->getRawValue()->getPostContent())) ?>
      </p>
      <span class="lastest-news-span-date"><?php echo tools::formatDate($new->getCreatedAt()); ?></span>
      <span class="lastest-news-span-more"><?php echo link_to('Leer +','posts/show?id='.$new->getId(),array('class'=>'lastest-news-a-more')) ?></span>
    </li>
    <div class="lastest-news-div-cb"></div>
  <?php endforeach ?>
  </ul>
</div>