<?php use_javascript('jquery.nivo.slider.js') ?>
<?php use_javascript('jquery.nivo.slider.pack.js') ?>
<?php use_javascript('slider.js') ?>

<div id="indexContent">
  <div id="leftSide">
    <div id="slider-wrapper">
        <div id="slider">
            <img src="/images/slider/slide1.jpg" alt="" title="#frontis"/>
            <img src="/images/slider/slide2.jpg" alt=""  />
            <img src="/images/slider/slide3.jpg" alt="" title="#slide1-caption"/>
            <img src="/images/slider/slide4.jpg" alt="" />
        </div>
        <div id="slide1-caption" class="nivo-html-caption">
            Contamos con Jard&iacute;n Infantil y Sala Cuna.
        </div>
        <div id="frontis" class="nivo-html-caption">
            Ven a visitarnos, estamos en <a href="<?php echo url_for('static/location'); ?>">Cochrane #870 Concepci&oacute;n.</a>
        </div>
    </div>
    <div id="banner-blank-wrapper">
      <p class="welcome">“Un mundo m&aacute;gico y acogedor, especializado en la primera infancia, donde el niño y la niña, de la mano con su familia y el jard&iacute;n, se forme como un ser integral, ocupado en desarrollar y potenciar sus habilidades, preocupado del cuidado del medio ambiente y las necesidades de su entorno social. En definitiva: trabajando e incorporando los valores esenciales para colaborar en forma activa en el encuentro y construcci&oacute;n de un mundo mejor”.</p>
    </div>
    <div id="banner-green-wrapper">
      <?php echo image_tag('jardin.jpg','size=197x133 id=van'); ?>
      <center>
      <h2 class="title-servicios-index-green">
        <a href="<?php echo url_for('static/jardininfantil'); ?>">Jard&iacuten Infantil</a>
      </h2>
      </center>
      <p class="text-servicios-index-green">Orientado a la socialización y desarrollo individual de cada pequeño/a</p>
      <ul class="list-servicios-index-green">
        <li>3 Tipos de Jornadas: (Mañana, Tarde, Todo el Día)</li>
        <li>Grupos de alrededor de 15 niños.</li>
        <li>Convenios con empresas e instituciones.</li>
      </ul>
    </div>
    <div id="banner-red-wrapper">
      <?php echo image_tag('salacuna.jpg','size=197x133 id=van'); ?>
      <center>
      <h2 class="title-servicios-index-red">
        <a href="<?php echo url_for('static/salacuna'); ?>">Sala Cuna</a>
      </h2>
      </center>
      <p class="text-servicios-index-red">Brindamos una atenci&oacute;n personalizada para el niño y su familia.</p>
      <p class="text-servicios-index-red">Nos caracterizamos por tener:</p>
      <ul class="list-servicios-index-red">
        <li>Personal especializado y con real vocaci&oacute;n.</li>
        <li>Ambiente hogareño.</li>
      </ul>
    </div>
    <div id="banner-purple-wrapper">
      <?php echo image_tag('VAN.jpg','size=197x133 id=van'); ?>
      <center>
      <h2 class="title-servicios-index-purple">
        <a href="<?php echo url_for('static/transporte'); ?>">Transporte Escolar</a>
      </h2>
      </center>
      <p class="text-servicios-index-purple">Despreocupate, nosotros traemos a tu pequeño al Jardín.</p>
      <p class="text-servicios-index-purple">Contamos con:</p>
      <ul class="list-servicios-index-purple">
        <li>Conductores de absoluta confianza</li>
        <li>Siempre acompañados con un asistente</li>
        <li>Todos los permisos al d&iacute;a</li>
        <li>Comodo y Seguro.</li>
      </ul>
    </div>
    <div id="random-photo-wrapper">
      <br/>
      <h2 class="title-photo-random">
        &Uacute;ltimas Fotos añadidas
      </h2>
      <div id="photo-wrapper">
      <?php include_component('static', 'randomPhotos') ?>
      </div>
    </div>
  </div>
  <div id="sideBar">
    <?php include_component('static', 'lastestNews') ?>
  </div>
</div>

<script type="text/javascript"> Cufon.now(); </script>