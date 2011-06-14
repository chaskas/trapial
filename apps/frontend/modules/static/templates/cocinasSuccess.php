<?php use_stylesheet('static/espacios'); ?>
<?php use_javascript('galleria/galleria-1.2.3.min.js') ?>
<p class="content-title">Nuestra Cocina</p>
<div class="tour-virtual-wrapper">
<div class="galleria">
  <a href="/images/cocina/1.jpg"><img title="cocina" alt="cocina" src="/images/cocina/1.jpg"/></a>
</div>
</div>
<script type="text/javascript">
  // Load the classic theme
  Galleria.loadTheme('../../js/galleria/themes/classic/galleria.classic.js');
  // Initialize Galleria
  $('.galleria').galleria({height: 480, width: 640});
</script>