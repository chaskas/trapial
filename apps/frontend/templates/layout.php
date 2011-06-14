<?php use_helper('I18N') ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <meta name="google-site-verification" content="pyV4smMEAh7soahMM_ExvNiAHPrkGiSbJuvSHz5DdMc" />
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-22337712-1']);
        _gaq.push(['_trackPageview']);

        (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
  </head>
  <body>
    <div id="con-pos">
      <div id="container">
        <div id="top-bg">
          <a name="top"></a>
          <div id="header"></div>
        </div>
        <div id="menu-bg">
          <div id="menu">
            <ul>
              <li id="green">
                <div class="menu-spacer1"><a href="<?php echo url_for('@homepage') ?>" class="link1"></a></div>
              </li>
              <li id="yellow" class="menu-aux-class">
                <p class="menu-spacer"></p>
                <p class="subtext menu-yellow">&bull;<a href="<?php echo url_for('posts/index') ?>" class="subtext menu-yellow">Noticias</a></p>
                <p class="subtext menu-yellow">&bull;<a href="<?php echo url_for('static/jornadas') ?>" class="subtext menu-yellow">Jornadas</a></p>
                <p class="subtext menu-yellow">&bull;<a href="<?php echo url_for('static/location') ?>" class="subtext menu-yellow">D&oacute;nde estamos</a></p>
                <p class="subtext menu-yellow">&bull;<a href="<?php echo url_for('static/horarios') ?>" class="subtext menu-yellow">Horarios de atenci&oacute;n</a></p>
                <p class="subtext menu-yellow">&bull;<a href="<?php echo url_for('static/resena') ?>" class="subtext menu-yellow">Reseña Hist&oacute;rica</a></p>
                <p class="subtext menu-yellow">&bull;<a href="<?php echo url_for('static/resena#peduc') ?>" class="subtext menu-yellow">Proyecto Educativo</a></p>
                <p class="subtext menu-yellow">&bull;<a href="<?php echo url_for('static/familia') ?>" class="subtext menu-yellow">Familia Cantaclariense</a></p>
                <p class="subtext menu-yellow">&bull;<a href="<?php echo url_for('static/infraestructura') ?>" class="subtext menu-yellow">Infraestructura</a></p>
              </li>
              <li id="red" class="menu-aux-class">
                <p class="menu-spacer"></p>
                <p class="subtext menu-red">&bull;<a href="<?php echo url_for('static/salacuna') ?>" class="subtext menu-red">Sala Cuna</a></p>
                <p class="subtext menu-red">&bull;<a href="<?php echo url_for('static/jardininfantil') ?>" class="subtext menu-red">Jard&iacute;n Infantil</a></p>
                <p class="subtext menu-red">&bull;<a href="<?php echo url_for('static/transporte') ?>" class="subtext menu-red">Transporte Escolar</a></p>
                <p class="subtext menu-red">&bull;<a href="<?php echo url_for('static/eventos') ?>" class="subtext menu-red">Eventos Infantiles</a></p>
                <p class="subtext menu-red">&bull;<a href="<?php echo url_for('static/talleresyotros') ?>" class="subtext menu-red">Talleres de Verano</a></p>
                <p class="subtext menu-red">&bull;<a href="<?php echo url_for('static/talleresyotros#otros') ?>" class="subtext menu-red">Otros</a></p>
              </li>
              <li id="blue" class="menu-aux-class">
                <p class="menu-spacer"></p>
                <p class="subtext menu-blue">&bull;<a href="<?php echo url_for('static/salas') ?>" class="subtext menu-blue">Salas</a></p>
                <p class="subtext menu-blue">&bull;<a href="<?php echo url_for('static/patios') ?>" class="subtext menu-blue">Patios</a></p>
                <p class="subtext menu-blue">&bull;<a href="<?php echo url_for('static/cocinas') ?>" class="subtext menu-blue">Cocina</a></p>
                <p class="subtext menu-blue">&bull;<a href="<?php echo url_for('static/banos') ?>" class="subtext menu-blue">Baños / Mudadores</a></p>
                <p class="subtext menu-blue">&bull;<a href="<?php echo url_for('@listPortfolio') ?>" class="subtext menu-blue">Galer&iacute;a Fotogr&aacute;fica</a></p>
              </li>
              <li id="purple">
                <div class="menu-spacer1"><a href="<?php echo url_for('static/contact') ?>" class="link1"></a></div>
              </li>
            </ul>
          </div>
          
        </div>
        <div id="content-bg">
          <div id="left">
            <div id="left-bg"></div>
            <div id="left-bg2"></div>
          </div>
          <div id="center-bg">
            <?php echo $sf_content; ?>
            <span><a href="#top" class="top">Volver Arriba</a></span>
          </div>
          <div id="right">
            <div id="right-bg"></div>
            <div id="right-bg2"></div>
          </div>
        </div>
        <div id="footer-bg">
          <div id="center-bottom-bg"></div>
        </div>
        <div id="footer-menu">
          <div id="footer"></div>
          <div id="copyright">
              <small>&#169; Copyright 2011 | Powered by <a href="http://www.webdevel.cl" class="copyright" target="_blank">WebDevel.cl</a></small>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
