<?php use_stylesheet('gallery.css') ?>
<?php $galleries = Gallery::getAllGalleries() ?>
<?php
  $uploadDir = sfConfig::get("app_sfMultipleAjaxUploadGalleryPlugin_path_gallery");
  $webDir = sfConfig::get("sf_web_dir");
  $correctPath = substr($uploadDir, strlen($webDir), strlen($uploadDir)-strlen($webDir));
?>
<h1 class="gallery-title">Galeria Fotografica</h1>
<div id="gallery-wrapper">
<?php $count = 0 ?>
<?php foreach ($galleries as $i=>$gallery): ?>
  <div id="<?php $gallery->getId(); ?>" class="album-view-container">
    <div class="album-frame">
      <a href="<?php echo url_for(@showGallery, $gallery) ?>">
        <img alt="<?php echo $gallery->getTitle(); ?>"  src="<?php echo $correctPath."/".$gallery->getId()."/".sfConfig::get("app_sfMultipleAjaxUploadGalleryPlugin_portfolio_thumbnails_size")."/".$gallery->getPhotoDefault()->getPicpath() ?>"/>
      </a>
    </div>
    <p class="album-title"><a href="<?php echo url_for(@showGallery, $gallery) ?>"><?php echo $gallery->getTitle(); ?></a></p>
    <p class="album-description"><?php echo $gallery->getDescription(); ?></p>
  </div>
  <?php $count++;if($count%3==0)echo "<div class='cb'></div>"; ?>
<?php endforeach; ?>
</div>