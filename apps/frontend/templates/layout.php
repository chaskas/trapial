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
  </head>
  <body>
    <div id="con-pos">
      <div id="container">
        <div id="top-bg">
          <div id="header"></div>
        </div>
        <div id="menu-bg">
          <div id="menu">
            <ul>
              <li class="green">
                <p><a href=""></a></p>
                <p class="subtext"></p>
              </li>
              <li class="yellow">
                <p><a href=""></a></p>
                <p class="subtext"></p>
              </li>
              <li class="red">
                <p><a href=""></a></p>
                <p class="subtext"></p>
              </li>
              <li class="blue">
                <p><a href=""></a></p>
                <p class="subtext"></p>
              </li>
              <li class="purple">
                <p><a href=""></a></p>
                <p class="subtext"></p>
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
              <?php echo $sf_content; ?>
          </div>

          <div id="right">
            <div id="right-bg"></div>
            <div id="right-bg2"></div>
          </div>

        </div>
        <div id="footer-bg">
<!--          <div id="left-bottom-bg"></div>-->
          <div id="center-bottom-bg"></div>
<!--          <div id="right-bottom-bg"></div>-->
        </div>
        <div id="footer-menu">
          <div id="footer"></div>
          <div id="copyright">
              <!--Dise&ntilde;o &amp; Desarrollo - Rodrigo Campos H.-->
              <a href="http://validator.w3.org/check?uri=referer" target="_blank"><img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="22" width="62" /></a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
