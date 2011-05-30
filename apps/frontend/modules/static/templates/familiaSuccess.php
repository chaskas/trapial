<?php use_stylesheet('static/familia'); ?>
<p class="content-title">Familia Cantaclariense</p>

<h1 class="titulo-equipo">Equipo Administrativo</h1>

<?php foreach ($admins as $admin): ?>
<div class="equipo">
  <div class="foto-wrapper">
    <?php echo image_tag('/uploads/employees/s_'.$admin->getPicture(),'alt='.$admin->getFullName().' size=112x150 class=foto');  ?>
  </div>
  <div class="datos">
    <p><b>Nombre</b>: <?php echo $admin->getFullName(); ?></p>
    <p><b>Profesi&oacute;n</b>: <?php echo $admin->getProfession(); ?></p>
    <p><b>Cargo</b>: <?php echo $admin->getOcupation(); ?></p>
  </div>
</div>
<?php endforeach; ?>


<h1 class="titulo-equipo">Equipo Educativo</h1>


<p><h2 class="titulo-nivel">Gatitos (Nivel Sala cuna Menor)</h2><?php echo image_tag('niveles/Gato.png','alt=Gatitos class=icono'); ?></p>

<?php foreach ($gatitos as $gatito): ?>
<div class="equipo">
  <div class="foto-wrapper">
    <?php echo image_tag('/uploads/employees/s_'.$gatito->getPicture(),'alt='.$gatito->getFullName().' size=112x150 class=foto');  ?>
  </div>
  <div class="datos">
    <p><b>Nombre</b>: <?php echo $gatito->getFullName(); ?></p>
    <p><b>Profesi&oacute;n</b>: <?php echo $gatito->getProfession(); ?></p>
    <p><b>Cargo</b>: <?php echo $gatito->getOcupation(); ?></p>
  </div>
</div>
<?php endforeach; ?>

<?php echo image_tag('niveles/Pollito.png','alt=Pollitos class=icono'); ?>
<h2 class="titulo-nivel">Pollitos (Nivel Sala cuna Intermedia)</h2>
<?php foreach ($pollitos as $pollito): ?>
<div class="equipo">
  <div class="foto-wrapper">
    <?php echo image_tag('/uploads/employees/s_'.$pollito->getPicture(),'alt='.$pollito->getFullName().' size=112x150 class=foto');  ?>
  </div>
  <div class="datos">
    <p><b>Nombre</b>: <?php echo $pollito->getFullName(); ?></p>
    <p><b>Profesi&oacute;n</b>: <?php echo $pollito->getProfession(); ?></p>
    <p><b>Cargo</b>: <?php echo $pollito->getOcupation(); ?></p>
  </div>
</div>
<?php endforeach; ?>

<?php echo image_tag('niveles/Leon.png','alt=Leones class=icono'); ?>
<h2 class="titulo-nivel">Leones (Nivel Sala cuna Mayor)</h2>
<?php foreach ($leones as $leon): ?>
<div class="equipo">
  <div class="foto-wrapper">
    <?php echo image_tag('/uploads/employees/s_'.$leon->getPicture(),'alt='.$leon->getFullName().' size=112x150 class=foto');  ?>
  </div>
  <div class="datos">
    <p><b>Nombre</b>: <?php echo $leon->getFullName(); ?></p>
    <p><b>Profesi&oacute;n</b>: <?php echo $leon->getProfession(); ?></p>
    <p><b>Cargo</b>: <?php echo $leon->getOcupation(); ?></p>
  </div>
</div>
<?php endforeach; ?>

<?php echo image_tag('niveles/Cuncuna.png','alt=Cuncunas class=icono'); ?>
<h2 class="titulo-nivel">Cuncunas (Nivel Medio menor I)</h2>
<?php foreach ($cuncunas as $cuncuna): ?>
<div class="equipo">
  <div class="foto-wrapper">
    <?php echo image_tag('/uploads/employees/s_'.$cuncuna->getPicture(),'alt='.$cuncuna->getFullName().' size=112x150 class=foto');  ?>
  </div>
  <div class="datos">
    <p><b>Nombre</b>: <?php echo $cuncuna->getFullName(); ?></p>
    <p><b>Profesi&oacute;n</b>: <?php echo $cuncuna->getProfession(); ?></p>
    <p><b>Cargo</b>: <?php echo $cuncuna->getOcupation(); ?></p>
  </div>
</div>
<?php endforeach; ?>

<?php echo image_tag('niveles/Ardilla.png','alt=Ardillas class=icono'); ?>
<h2 class="titulo-nivel">Ardillas (Nivel Medio menor II)</h2>
<?php foreach ($ardillas as $ardilla): ?>
<div class="equipo">
  <div class="foto-wrapper">
    <?php echo image_tag('/uploads/employees/s_'.$ardilla->getPicture(),'alt='.$ardilla->getFullName().' size=112x150 class=foto');  ?>
  </div>
  <div class="datos">
    <p><b>Nombre</b>: <?php echo $ardilla->getFullName(); ?></p>
    <p><b>Profesi&oacute;n</b>: <?php echo $ardilla->getProfession(); ?></p>
    <p><b>Cargo</b>: <?php echo $ardilla->getOcupation(); ?></p>
  </div>
</div>
<?php endforeach; ?>

<?php echo image_tag('niveles/Conejo.png','alt=Conejos class=icono'); ?>
<h2 class="titulo-nivel">Conejos (Nivel Medio mayor I)</h2>
<?php foreach ($conejos as $conejo): ?>
<div class="equipo">
  <div class="foto-wrapper">
    <?php echo image_tag('/uploads/employees/s_'.$conejo->getPicture(),'alt='.$conejo->getFullName().' size=112x150 class=foto');  ?>
  </div>
  <div class="datos">
    <p><b>Nombre</b>: <?php echo $conejo->getFullName(); ?></p>
    <p><b>Profesi&oacute;n</b>: <?php echo $conejo->getProfession(); ?></p>
    <p><b>Cargo</b>: <?php echo $conejo->getOcupation(); ?></p>
  </div>
</div>
<?php endforeach; ?>

<?php echo image_tag('niveles/Perro.png','alt=Cachorros class=icono'); ?>
<h2 class="titulo-nivel">Cachorros (Nivel Medio mayor II)</h2>
<?php foreach ($cachorros as $cachorro): ?>
<div class="equipo">
  <div class="foto-wrapper">
    <?php echo image_tag('/uploads/employees/s_'.$cachorro->getPicture(),'alt='.$cachorro->getFullName().' size=112x150 class=foto');  ?>
  </div>
  <div class="datos">
    <p><b>Nombre</b>: <?php echo $cachorro->getFullName(); ?></p>
    <p><b>Profesi&oacute;n</b>: <?php echo $cachorro->getProfession(); ?></p>
    <p><b>Cargo</b>: <?php echo $cachorro->getOcupation(); ?></p>
  </div>
</div>
<?php endforeach; ?>

<?php echo image_tag('niveles/sin-avatar.png','alt=Semillas class=icono'); ?>
<h2 class="titulo-nivel">Semilla (Nivel Especial)</h2>
<?php foreach ($semillas as $semilla): ?>
<div class="equipo">
  <div class="foto-wrapper">
    <?php echo image_tag('/uploads/employees/s_'.$semilla->getPicture(),'alt='.$semilla->getFullName().' size=112x150 class=foto');  ?>
  </div>
  <div class="datos">
    <p><b>Nombre</b>: <?php echo $semilla->getFullName(); ?></p>
    <p><b>Profesi&oacute;n</b>: <?php echo $semilla->getProfession(); ?></p>
    <p><b>Cargo</b>: <?php echo $semilla->getOcupation(); ?></p>
  </div>
</div>
<?php endforeach; ?>

<h1 class="titulo-equipo">Equipo de Apoyo</h1>
<?php foreach ($apoyos as $apoyo): ?>
<div class="equipo">
  <div class="foto-wrapper">
    <?php echo image_tag('/uploads/employees/s_'.$apoyo->getPicture(),'alt='.$apoyo->getFullName().' size=112x150 class=foto');  ?>
  </div>
  <div class="datos">
    <p><b>Nombre</b>: <?php echo $apoyo->getFullName(); ?></p>
    <p><b>Profesi&oacute;n</b>: <?php echo $apoyo->getProfession(); ?></p>
    <p><b>Cargo</b>: <?php echo $apoyo->getOcupation(); ?></p>
  </div>
</div>
<?php endforeach; ?>