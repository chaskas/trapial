<?php
if(!in_array(sfConfig::get("app_sfMultipleAjaxUploadGalleryPlugin_theme"),array("jroller"))){
    use_javascript("../sfMultipleAjaxUploadGalleryPlugin/js/jquery/jquery-1.4.4.js");
}?>
<div id="pictures_list" class="sf_admin_form_row">
  <?php include_partial('gallery/photoListe', array('photos' => $form->getObject()->getPhotos())) ?>
</div>
<?php use_stylesheet("../sfMultipleAjaxUploadGalleryPlugin/css/fileuploader.css") ?>
<div id="upload"><?php echo __('Agregar m&aacute;s fotos') ?></div>
<!--List Files-->
<ul id="files" ></ul>
<div class="clear"></div>
<?php use_javascript("../sfMultipleAjaxUploadGalleryPlugin/js/fileuploader.js") ?>
<script>
    function createUploader(){
    var uploader = new qq.FileUploader({
            element: document.getElementById('upload'),
            template: '<?php include_partial("templateUploader") ?>',
            action: '<?php echo url_for(@gallery_upload) ?>',
            params:
                { gallery_id: <?php echo $form->getObject()->getId(); ?>},
            onComplete: function(id, file, responseJson){
                    $.post("<?php echo url_for(@gallery_ajax_photo_liste,$form->getObject()) ?>",
                    {gallery_id: <?php echo $form->getObject()->getId(); ?>},
                    function(data)
                    {
                        $("#pictures_list").html(data);
                        $('#status').removeClass("loading");
                        $('#status').addClass("success");
                    });
                    
                },
            onSubmit: function(id, fileName){
                },
            onProgress: function(id, fileName){
                        $('#status').addClass("success");
                    $('#status').addClass("loading");
                }
            });
            
    }
    window.onload = createUploader;
</script>

<script type="text/javascript">

(function($) {

  $('div.actions a.default').live('click', function(event) {
    event.preventDefault();
    $.post(
      $(this).attr('href'),
      { },
      function(data) {
        $('#pictures_list').html(data);
      }
    );
  });

  $('div.actions a.delete').live('click', function(event) {
    event.preventDefault();
    if(confirm('Esta seguro?')) {
      $.post(
        $(this).attr('href'),
        { },
        function(data) {
          eval(data);
        }
      );
    }
  });
})
  </script>
