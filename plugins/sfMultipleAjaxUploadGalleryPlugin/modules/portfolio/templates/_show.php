<?php use_javascript('galleria/galleria-1.2.3.min.js') ?>

<?php
  $uploadDir = sfConfig::get("app_sfMultipleAjaxUploadGalleryPlugin_path_gallery");
  $webDir = sfConfig::get("sf_web_dir");
  $correctPath = substr($uploadDir, strlen($webDir), strlen($uploadDir) - strlen($webDir));
?>
<h1><?php echo $gallery->getTitle() ?></h1>
<div id="galleria">
<?php foreach ($gallery->getPhotos() as $photo) { ?>
  <a href="<?php echo $correctPath.$gallery->getId()."/450/".$photo->getPicPath() ?>">
  <img title="<?php echo $photo->getTitle() ?>"
       alt="<?php echo $photo->getTitle() ?>"
       src="<?php echo $correctPath.$gallery->getId()."/".sfConfig::get("app_sfMultipleAjaxUploadGalleryPlugin_portfolio_thumbnails_size")."/".$photo->getPicPath() ?>"/>
  </a>
<?php } ?>
</div>


<script type="text/javascript">
  // Load the classic theme
  Galleria.loadTheme('../../js/galleria/themes/classic/galleria.classic.js');
  // Initialize Galleria
  $('#galleria').galleria({height: 600});
</script>