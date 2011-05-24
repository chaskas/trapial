  <!-- Content -->
  <div id="content">

    <!-- Box -->
    <div class="box">
      <!-- Box Head -->
      <div class="box-head">
        <h2 class="left">Personal</h2>
      </div>
      <!-- End Box Head -->

      <!-- Table -->
      <div class="table">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <th>Nombre Completo</th>
            <th>T&iacute;tulo</th>
            <th>Cargo</th>
            <th>Equipo</th>
            <th>Nivel</th>
            <th width="110" class="ac">Opciones</th>
          </tr>

        <?php $count = 0 ?>
        <?php foreach ($trapial_employees as $trapial_employee): ?>
          <tr <?php if ($count % 2 == 0
            )echo "class='odd'"; ?>>
            <td><?php echo $trapial_employee->getFullName() ?></td>
            <td><?php echo $trapial_employee->getProfession() ?></td>
            <td><?php echo $trapial_employee->getOcupation() ?></td>
            <td><?php echo $trapial_employee->getTeam() ?></td>
            <td><?php echo $trapial_employee->getNivel() ?></td>
            <td><?php echo link_to('Borrar', 'posts/delete?id=' . $trapial_employee->getId(), array('method' => 'delete', 'confirm' => '¿Estas seguro?', 'class' => 'ico del')) ?><a href="<?php echo url_for('employee/edit?id=' . $trapial_employee->getId()) ?>" class="ico edit">Editar</a></td>
          </tr>
        <?php $count++; ?>
<?php endforeach; ?>
        </table>


        <!-- Pagging -->
        <div class="pagging">
          <div class="left"><?php echo $count; ?> Empleados</div>
        </div>
        <!-- End Pagging -->
      </div>
      <!-- Table -->
    </div>
    <!-- End Box -->

  </div>
  <!-- End Content -->

  <!-- Sidebar -->
  <div id="sidebar">

    <!-- Box -->
    <div class="box">

      <!-- Box Head -->
      <div class="box-head">
        <h2>Opciones</h2>
      </div>
      <!-- End Box Head-->

      <div class="box-content">
        <a href="<?php echo url_for('employee/new') ?>" class="add-button"><span>Agregar Personal</span></a>
      <div class="cl">&nbsp;</div>

                        <!--<p class="select-all"><input type="checkbox" class="checkbox" /><label>Seleccionar Todas</label></p>-->
                        <!--<p><a href="#">Eliminar seleccionados</a></p>-->

    </div>
  </div>
  <!-- End Box -->
</div>
<!-- End Sidebar -->
