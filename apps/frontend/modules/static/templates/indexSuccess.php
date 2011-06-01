<?php use_javascript('jquery.nivo.slider.js') ?>
<?php use_javascript('jquery.nivo.slider.pack.js') ?>
<?php use_javascript('slider.js') ?>

<div id="indexContent">
  <div id="leftSide">
    <div id="slider-wrapper">
        <div id="slider">
            <img src="/images/slider/slide1.jpg" alt="" />
            <img src="/images/slider/slide2.jpg" alt="" title="#htmlcaption" />
            <img src="/images/slider/slide3.jpg" alt="" title="This is an example of a caption" />
            <img src="/images/slider/slide4.jpg" alt="" />
        </div>
        <div id="htmlcaption" class="nivo-html-caption">
            <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
        </div>
    </div>
    <div id="banner-blank-wrapper">
      <p class="welcome">“Un mundo m&aacute;gico y acogedor, especializado en la primera infancia, donde el niño y la niña, de la mano con su familia y el jard&iacute;n, se forme como un ser integral, ocupado en desarrollar y potenciar sus habilidades, preocupado del cuidado del medio ambiente y las necesidades de su entorno social. En definitiva: trabajando e incorporando los valores esenciales para colaborar en forma activa en el encuentro y construcci&oacute;n de un mundo mejor”.</p>
    </div>
    <div id="banner-green-wrapper"></div>
    <div id="banner-red-wrapper"></div>
    <div id="banner-purple-wrapper"></div>
    <div id="random-photo-wrapper"></div>
  </div>
  <div id="sideBar">
    <?php include_component('static', 'lastestNews') ?>
  </div>
</div>

<script type="text/javascript"> Cufon.now(); </script>