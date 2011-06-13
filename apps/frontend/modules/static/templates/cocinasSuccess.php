<?php use_stylesheet('static/espacios'); ?>
<?php use_javascript('galleria/galleria-1.2.3.min.js') ?>
<p class="content-title">Nuestra Cocina</p>
<div class="tour-virtual-wrapper">
<p class="contamos2">Contamos con blah blah...</p>
<div class="galleria">
  <a href="/uploads/gallery/1/450/JackelineLarenas.jpg">
  <img title="Jackeline"
       alt="Jackeline"
       src="/uploads/gallery/1/450/JackelineLarenas.jpg"/>
  </a>
</div>
</div>
<script type="text/javascript">
  // Load the classic theme
  Galleria.loadTheme('../../js/galleria/themes/classic/galleria.classic.js');
  // Initialize Galleria
  $('.galleria').galleria({height: 480, width: 640});
</script>