<?php
  $uploadDir = sfConfig::get("app_sfMultipleAjaxUploadGalleryPlugin_path_gallery");
  $webDir = sfConfig::get("sf_web_dir");
  $correctPath = substr($uploadDir, strlen($webDir), strlen($uploadDir) - strlen($webDir));
?>

<?php $i = 1;?>
<?php foreach ($galleries->getPhotos() as $photo) : ?>
  <?php if($i<=3) : ?>
  <img title="<?php echo $photo->getTitle() ?>"
       alt="<?php echo $photo->getTitle() ?>"
       src="<?php echo $correctPath.$galleries->getId()."/".sfConfig::get("app_sfMultipleAjaxUploadGalleryPlugin_portfolio_thumbnails_size")."/".$photo->getPicPath() ?>"
       class="random"/>
  <?php $i++; ?>
  <?php endif; ?>
<?php endforeach; ?>