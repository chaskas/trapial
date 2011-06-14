<?php use_stylesheet('static/espacios'); ?>
<?php use_javascript('galleria/galleria-1.2.3.min.js') ?>
<p class="content-title">Nuestras Salas</p>
<div class="tour-virtual-wrapper">
<p class="contamos">
  Haga click en el enlace para ver la descripci&oacute;n
</p>
<ul class="listadosalas">
  <li class="listadosalas"><a href="#Gatitos">Sala Gatitos</a></li>
  <li class="listadosalas"><a href="#Pollitos">Sala Pollitos</a></li>
  <li class="listadosalas"><a href="#Leones">Sala Leones</a></li>
  <li class="listadosalas"><a href="#Cuncunas">Sala Cuncunas</a></li>
  <li class="listadosalas"><a href="#Ardillas">Sala Ardillas</a></li>
  <li class="listadosalas"><a href="#Conejos">Sala Conejos</a></li>
  <li class="listadosalas"><a href="#Cachorros">Sala Cachorros</a></li>
  <li class="listadosalas"><a href="#Semilla">Sala Semilla</a></li>
</ul>

<!-- Gatitos -->
<a name="Gatitos"></a><h1 class="sala-title">Sala Gatitos</h1>
<p class="contamos">Contamos con:</p>
  <ul>
    <li>9 cunas</li>
    <li>Espejo</li>
    <li>Colchonetas</li>
    <li>Móviles en cada cuna</li>
    <li>5 sillas nido para bebés</li>
  </ul>
<h2 class="team-title">Equipo Gatitos</h2>
<div class="equipo">
  <?php foreach($gatitos as $gatito) : ?>
  <div class="persona">
    <div class="foto-wrapper-salas"><?php echo image_tag('/uploads/employees/s_'.$gatito->getPicture(),'alt='.$gatito->getFullName().' size=84x112 class=foto');  ?></div>
    <div class="datos-wrapper-salas">
      <span class="datos"><?php echo $gatito->getFullName(); ?>
      <br/>
      <span class="ocupation"><?php echo $gatito->getOcupation(); ?></span></span>
    </div>
  </div>
  <?php endforeach; ?>
  <div id="cl"></div>
</div>
<div class="galleria">
  <a href="/images/gatitos/1.jpg"><img title="Gatitos" alt="Gatitos" src="/images/gatitos/1.jpg"/></a>
  <a href="/images/gatitos/2.jpg"><img title="Gatitos" alt="Gatitos" src="/images/gatitos/2.jpg"/></a>
  <a href="/images/gatitos/3.jpg"><img title="Gatitos" alt="Gatitos" src="/images/gatitos/3.jpg"/></a>
  <a href="/images/gatitos/4.jpg"><img title="Gatitos" alt="Gatitos" src="/images/gatitos/4.jpg"/></a>
  <a href="/images/gatitos/5.jpg"><img title="Gatitos" alt="Gatitos" src="/images/gatitos/5.jpg"/></a>
</div>
<br/><br/>
<!-- Fin Gatitos -->

<!-- Pollitos -->
<a name="Pollitos"></a><h1 class="sala-title">Sala Pollitos</h1>

<h2 class="team-title">Equipo Pollitos</h2>
<div class="equipo">
  <?php foreach($pollitos as $pollito) : ?>
  <div class="persona">
    <div class="foto-wrapper-salas"><?php echo image_tag('/uploads/employees/s_'.$pollito->getPicture(),'alt='.$pollito->getFullName().' size=84x112 class=foto');  ?></div>
    <div class="datos-wrapper-salas">
      <span class="datos"><?php echo $pollito->getFullName(); ?>
      <br/>
      <span class="ocupation"><?php echo $pollito->getOcupation(); ?></span></span>
    </div>
  </div>
  <?php endforeach; ?>
  <div id="cl"></div>
</div>
<div class="galleria">
  <a href="/images/pollitos/1.jpg"><img title="Pollitos" alt="Pollitos" src="/images/pollitos/1.jpg"/></a>
  <a href="/images/pollitos/2.jpg"><img title="Pollitos" alt="Pollitos" src="/images/pollitos/2.jpg"/></a>
  <a href="/images/pollitos/3.jpg"><img title="Pollitos" alt="Pollitos" src="/images/pollitos/3.jpg"/></a>
  <a href="/images/pollitos/4.jpg"><img title="Pollitos" alt="Pollitos" src="/images/pollitos/4.jpg"/></a>
  <a href="/images/pollitos/5.jpg"><img title="Pollitos" alt="Pollitos" src="/images/pollitos/5.jpg"/></a>
</div>
<br/><br/>
<!-- Fin Pollitos -->

<!-- Leones -->
<a name="Leones"></a><h1 class="sala-title">Sala Leones</h1>
<p class="contamos">Contamos con:</p>
  <ul>
    <li>Radio con Cd y micrófono</li>
    <li>Colchoneta</li>
    <li>Sala de amamantamiento .- espacio amplio para que las mamás que amamantan lo hagan tranquila e íntimamente</li>
  </ul>
<h2 class="team-title">Equipo Leones</h2>
<div class="equipo">
  <?php foreach($leones as $leon) : ?>
  <div class="persona">
    <div class="foto-wrapper-salas"><?php echo image_tag('/uploads/employees/s_'.$leon->getPicture(),'alt='.$leon->getFullName().' size=84x112 class=foto');  ?></div>
    <div class="datos-wrapper-salas">
      <span class="datos"><?php echo $leon->getFullName(); ?>
      <br/>
      <span class="ocupation"><?php echo $leon->getOcupation(); ?></span></span>
    </div>
  </div>
  <?php endforeach; ?>
  <div id="cl"></div>
</div>
<div class="galleria">
  <a href="/images/leones/1.jpg"><img title="Leones" alt="Leones" src="/images/leones/1.jpg"/></a>
  <a href="/images/leones/2.jpg"><img title="Leones" alt="Leones" src="/images/leones/2.jpg"/></a>
  <a href="/images/leones/3.jpg"><img title="Leones" alt="Leones" src="/images/leones/3.jpg"/></a>
  <a href="/images/leones/4.jpg"><img title="Leones" alt="Leones" src="/images/leones/4.jpg"/></a>
  <a href="/images/leones/5.jpg"><img title="Leones" alt="Leones" src="/images/leones/5.jpg"/></a>
  <a href="/images/leones/6.jpg"><img title="Leones" alt="Leones" src="/images/leones/6.jpg"/></a>
  <a href="/images/leones/7.jpg"><img title="Leones" alt="Leones" src="/images/leones/7.jpg"/></a>
</div>
<br/><br/>
<!-- Fin Leones -->

<!-- Cuncunas -->
<a name="Cuncunas"></a><h1 class="sala-title">Sala Cuncunas</h1>

<h2 class="team-title">Equipo Cuncunas</h2>
<div class="equipo">
  <?php foreach($cuncunas as $cuncuna) : ?>
  <div class="persona">
    <div class="foto-wrapper-salas"><?php echo image_tag('/uploads/employees/s_'.$cuncuna->getPicture(),'alt='.$cuncuna->getFullName().' size=84x112 class=foto');  ?></div>
    <div class="datos-wrapper-salas">
      <span class="datos"><?php echo $cuncuna->getFullName(); ?>
      <br/>
      <span class="ocupation"><?php echo $cuncuna->getOcupation(); ?></span></span>
    </div>
  </div>
  <?php endforeach; ?>
  <div id="cl"></div>
</div>
<div class="galleria">
  <a href="/images/cuncunas/1.jpg"><img title="Baños" alt="Baños" src="/images/cuncunas/1.jpg"/></a>
  <a href="/images/cuncunas/2.jpg"><img title="Baños" alt="Baños" src="/images/cuncunas/2.jpg"/></a>
  <a href="/images/cuncunas/3.jpg"><img title="Baños" alt="Baños" src="/images/cuncunas/3.jpg"/></a>
  <a href="/images/cuncunas/4.jpg"><img title="Baños" alt="Baños" src="/images/cuncunas/4.jpg"/></a>
  <a href="/images/cuncunas/5.jpg"><img title="Baños" alt="Baños" src="/images/cuncunas/5.jpg"/></a>
  <a href="/images/cuncunas/6.jpg"><img title="Baños" alt="Baños" src="/images/cuncunas/6.jpg"/></a>
  <a href="/images/cuncunas/7.jpg"><img title="Baños" alt="Baños" src="/images/cuncunas/7.jpg"/></a>
</div>
<br/><br/>
<!-- Fin Cuncunas -->

<!-- Ardillas -->
<a name="Ardillas"></a><h1 class="sala-title">Sala Ardillas</h1>

<h2 class="team-title">Equipo Ardillas</h2>
<div class="equipo">
  <?php foreach($ardillas as $ardilla) : ?>
  <div class="persona">
    <div class="foto-wrapper-salas"><?php echo image_tag('/uploads/employees/s_'.$ardilla->getPicture(),'alt='.$ardilla->getFullName().' size=84x112 class=foto');  ?></div>
    <div class="datos-wrapper-salas">
      <span class="datos"><?php echo $ardilla->getFullName(); ?>
      <br/>
      <span class="ocupation"><?php echo $ardilla->getOcupation(); ?></span></span>
    </div>
  </div>
  <?php endforeach; ?>
  <div id="cl"></div>
</div>
<div class="galleria">
  <a href="/images/ardillas/1.jpg"><img title="Ardillas" alt="Ardillas" src="/images/ardillas/1.jpg"/></a>
  <a href="/images/ardillas/2.jpg"><img title="Ardillas" alt="Ardillas" src="/images/ardillas/2.jpg"/></a>
  <a href="/images/ardillas/3.jpg"><img title="Ardillas" alt="Ardillas" src="/images/ardillas/3.jpg"/></a>
  <a href="/images/ardillas/4.jpg"><img title="Ardillas" alt="Ardillas" src="/images/ardillas/4.jpg"/></a>
  <a href="/images/ardillas/5.jpg"><img title="Ardillas" alt="Ardillas" src="/images/ardillas/5.jpg"/></a>
  <a href="/images/ardillas/6.jpg"><img title="Ardillas" alt="Ardillas" src="/images/ardillas/6.jpg"/></a>
</div>
<br/><br/>
<!-- Fin Ardillas -->

<!-- Conejos -->
<a name="Conejos"></a><h1 class="sala-title">Sala Conejos</h1>

<h2 class="team-title">Equipo Conejos</h2>
<div class="equipo">
  <?php foreach($conejos as $Conejo) : ?>
  <div class="persona">
    <div class="foto-wrapper-salas"><?php echo image_tag('/uploads/employees/s_'.$Conejo->getPicture(),'alt='.$Conejo->getFullName().' size=84x112 class=foto');  ?></div>
    <div class="datos-wrapper-salas">
      <span class="datos"><?php echo $Conejo->getFullName(); ?>
      <br/>
      <span class="ocupation"><?php echo $Conejo->getOcupation(); ?></span></span>
    </div>
  </div>
  <?php endforeach; ?>
  <div id="cl"></div>
</div>
<div class="galleria">
  <a href="/images/conejos/1.jpg"><img title="conejos" alt="conejos" src="/images/conejos/1.jpg"/></a>
  <a href="/images/conejos/2.jpg"><img title="conejos" alt="conejos" src="/images/conejos/2.jpg"/></a>
  <a href="/images/conejos/3.jpg"><img title="conejos" alt="conejos" src="/images/conejos/3.jpg"/></a>
  <a href="/images/conejos/4.jpg"><img title="conejos" alt="conejos" src="/images/conejos/4.jpg"/></a>
  <a href="/images/conejos/5.jpg"><img title="conejos" alt="conejos" src="/images/conejos/5.jpg"/></a>
  <a href="/images/conejos/6.jpg"><img title="conejos" alt="conejos" src="/images/conejos/6.jpg"/></a>
  <a href="/images/conejos/7.jpg"><img title="conejos" alt="conejos" src="/images/conejos/7.jpg"/></a>
  <a href="/images/conejos/8.jpg"><img title="conejos" alt="conejos" src="/images/conejos/8.jpg"/></a>
  <a href="/images/conejos/8.jpg"><img title="conejos" alt="conejos" src="/images/conejos/8.jpg"/></a>
  <a href="/images/conejos/9.jpg"><img title="conejos" alt="conejos" src="/images/conejos/9.jpg"/></a>
  <a href="/images/conejos/10.jpg"><img title="conejos" alt="conejos" src="/images/conejos/10.jpg"/></a>
  <a href="/images/conejos/11.jpg"><img title="conejos" alt="conejos" src="/images/conejos/11.jpg"/></a>
  <a href="/images/conejos/12.jpg"><img title="conejos" alt="conejos" src="/images/conejos/12.jpg"/></a>
</div>
<br/><br/>
<!-- Fin Conejos -->

<!-- Cachorros -->
<a name="Cachorros"></a><h1 class="sala-title">Sala Cachorros</h1>
<p class="contamos">Contamos con:</p>
  <ul>
    <li>Area de lenguaje</li>
    <li>Area matemáticas</li>
    <li>Area Arte</li>
    <li>Radio CD</li>
  </ul>
<h2 class="team-title">Equipo Cachorros</h2>
<div class="equipo">
  <?php foreach($cachorros as $Cachorro) : ?>
  <div class="persona">
    <div class="foto-wrapper-salas"><?php echo image_tag('/uploads/employees/s_'.$Cachorro->getPicture(),'alt='.$Cachorro->getFullName().' size=84x112 class=foto');  ?></div>
    <div class="datos-wrapper-salas">
      <span class="datos"><?php echo $Cachorro->getFullName(); ?>
      <br/>
      <span class="ocupation"><?php echo $Cachorro->getOcupation(); ?></span></span>
    </div>
  </div>
  <?php endforeach; ?>
  <div id="cl"></div>
</div>
<div class="galleria">
  <a href="/images/cachorros/1.jpg"><img title="Cachorros" alt="Cachorros" src="/images/cachorros/1.jpg"/></a>
  <a href="/images/cachorros/2.jpg"><img title="Cachorros" alt="Cachorros" src="/images/cachorros/2.jpg"/></a>
  <a href="/images/cachorros/3.jpg"><img title="Cachorros" alt="Cachorros" src="/images/cachorros/3.jpg"/></a>
  <a href="/images/cachorros/4.jpg"><img title="Cachorros" alt="Cachorros" src="/images/cachorros/4.jpg"/></a>
  <a href="/images/cachorros/5.jpg"><img title="Cachorros" alt="Cachorros" src="/images/cachorros/5.jpg"/></a>
  <a href="/images/cachorros/6.jpg"><img title="Cachorros" alt="Cachorros" src="/images/cachorros/6.jpg"/></a>
</div>
<br/><br/>
<!-- Fin Cachorros -->

<!-- Semilla -->
<a name="Semilla"></a><h1 class="sala-title">Sala Semilla</h1>
<p class="contamos">Contamos con:</p>
  <ul class="lista-infra">
    <li>Area Lenguaje</li>
    <li>Area Matematicas</li>
    <li>Area Ciencia</li>
    <li>Area Arte</li>
    <li>Radio CD</li>
  </ul>
<h2 class="team-title">Equipo Semilla</h2>
<div class="equipo">
  <?php foreach($semillas as $Semilla) : ?>
  <div class="persona">
    <div class="foto-wrapper-salas"><?php echo image_tag('/uploads/employees/s_'.$Semilla->getPicture(),'alt='.$Semilla->getFullName().' size=84x112 class=foto');  ?></div>
    <div class="datos-wrapper-salas">
      <span class="datos"><?php echo $Semilla->getFullName(); ?>
      <br/>
      <span class="ocupation"><?php echo $Semilla->getOcupation(); ?></span></span>
    </div>
  </div>
  <?php endforeach; ?>
  <div id="cl"></div>
</div>
<div class="galleria">
  <a href="/images/semilla/1.jpg"><img title="Semilla" alt="Semilla" src="/images/semilla/1.jpg"/></a>
  <a href="/images/semilla/2.jpg"><img title="Semilla" alt="Semilla" src="/images/semilla/2.jpg"/></a>
  <a href="/images/semilla/3.jpg"><img title="Semilla" alt="Semilla" src="/images/semilla/3.jpg"/></a>
  <a href="/images/semilla/4.jpg"><img title="Semilla" alt="Semilla" src="/images/semilla/4.jpg"/></a>
  <a href="/images/semilla/5.jpg"><img title="Semilla" alt="Semilla" src="/images/semilla/5.jpg"/></a>
</div>
</div>
<!-- Fin $Semilla -->

<script type="text/javascript">
  // Load the classic theme
  Galleria.loadTheme('../../js/galleria/themes/classic/galleria.classic.js');
  // Initialize Galleria
  $('.galleria').galleria({height: 480, width: 640});
</script>
