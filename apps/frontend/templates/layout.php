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
  <body onload="initialize()">
    <div id="con-pos">
      <div id="container">
        <div id="demo">
          <p class="demo">Mundo Cantaclaro est&aacute; en estapa de construcción. Si desea hacer pruebas puede probar con el usuario habilitado para esto</p>
          <p class="demo">Usuario: <b>test</b> Password: <b>test</b></p>
        </div>
        <div id="top-bg">
          <div id="header"></div>
        </div>
        <div id="menu-bg">
          <div id="menu">
            <ul>
              <li id="green" class="menu-aux-class">
                <p class="menu-spacer"></p>
                <p class="subtext">-<a href="<?php echo url_for('@homepage') ?>" class="subtext">Homepage</a></p>
              </li>
              <li id="yellow" class="menu-aux-class">
                <p class="menu-spacer"></p>
                <p class="subtext">-<a href="<?php echo url_for('posts/index') ?>" class="subtext">Noticias</a></p>
              </li>
              <li id="red" class="menu-aux-class">
                <p><a href=""></a></p>
                <p class="subtext"></p>
              </li>
              <li id="blue" class="menu-aux-class">
                <p class="menu-spacer"></p>
                <p class="subtext">-<a href="<?php echo url_for('static/location') ?>" class="subtext">Donde estamos</a></p>
              </li>
              <li id="purple" class="menu-aux-class">
                <div id="login-button">
                </div>
                <p class="menu-spacer"></p>
                <p class="subtext">-<a href="<?php echo url_for('static/contact') ?>" class="subtext">Cont&aacute;ctanos</a></p>
                <p id="facebook"><?php echo link_to(image_tag('facebook-icon-48x48.png',array('alt' => 'Encuentranos en Facebook', 'size' => '24x24','border'=> '0')),'http://www.facebook.com/mundo.cantaclaro',array('target'=>'_blank')); ?></p>
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
            <div id="login-box">
              <?php if ($sf_user->isAuthenticated()): ?>
                <div id="login-status-wrapper">
                  <p id="logged_user">
                    <span class="inner">
                      Bienvenido <?php echo $sf_user->getGuardUser()->getName(); ?> | <?php echo link_to('Salir','@sf_guard_signout') ?>
                    </span>
                  </p>
                </div>
              <?php else: ?>
                <span class="login-form-title"><?php echo __('Inicie Sesi&oacute;n', null, 'sf_guard') ?></span>
                <?php include_component('sfGuardAuth', 'signin_form'); ?>
              <?php endif; ?>
            </div>
            <?php echo $sf_content; ?>
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
              <a href="http://validator.w3.org/check?uri=referer" target="_blank"><img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="22" width="62" styles="border: 0px;"/></a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
