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
  <a href="/uploads/gallery/1/450/JackelineLarenas.jpg">
  <img title="Jackeline"
       alt="Jackeline"
       src="/uploads/gallery/1/450/JackelineLarenas.jpg"/>
  </a>
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
  <a href="/uploads/gallery/1/450/JackelineLarenas.jpg">
  <img title="Jackeline"
       alt="Jackeline"
       src="/uploads/gallery/1/450/JackelineLarenas.jpg"/>
  </a>
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
  <a href="/uploads/gallery/1/450/JackelineLarenas.jpg">
  <img title="Jackeline"
       alt="Jackeline"
       src="/uploads/gallery/1/450/JackelineLarenas.jpg"/>
  </a>
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
  <a href="/uploads/gallery/1/450/JackelineLarenas.jpg">
  <img title="Jackeline"
       alt="Jackeline"
       src="/uploads/gallery/1/450/JackelineLarenas.jpg"/>
  </a>
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
  <a href="/uploads/gallery/1/450/JackelineLarenas.jpg">
  <img title="Jackeline"
       alt="Jackeline"
       src="/uploads/gallery/1/450/JackelineLarenas.jpg"/>
  </a>
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
  <a href="/uploads/gallery/1/450/JackelineLarenas.jpg">
  <img title="Jackeline"
       alt="Jackeline"
       src="/uploads/gallery/1/450/JackelineLarenas.jpg"/>
  </a>
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
  <a href="/uploads/gallery/1/450/JackelineLarenas.jpg">
  <img title="Jackeline"
       alt="Jackeline"
       src="/uploads/gallery/1/450/JackelineLarenas.jpg"/>
  </a>
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
  <a href="/uploads/gallery/1/450/JackelineLarenas.jpg">
  <img title="Jackeline"
       alt="Jackeline"
       src="/uploads/gallery/1/450/JackelineLarenas.jpg"/>
  </a>
</div>
</div>
<!-- Fin $Semilla -->

<script type="text/javascript">
  // Load the classic theme
  Galleria.loadTheme('../../js/galleria/themes/classic/galleria.classic.js');
  // Initialize Galleria
  $('.galleria').galleria({height: 480, width: 640});
</script>
