<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $trapial_employee->getId() ?></td>
    </tr>
    <tr>
      <th>First name:</th>
      <td><?php echo $trapial_employee->getFirstName() ?></td>
    </tr>
    <tr>
      <th>Last name:</th>
      <td><?php echo $trapial_employee->getLastName() ?></td>
    </tr>
    <tr>
      <th>Profession:</th>
      <td><?php echo $trapial_employee->getProfession() ?></td>
    </tr>
    <tr>
      <th>Ocupation:</th>
      <td><?php echo $trapial_employee->getOcupation() ?></td>
    </tr>
    <tr>
      <th>Picture:</th>
      <td><?php echo $trapial_employee->getPicture() ?></td>
    </tr>
    <tr>
      <th>Team:</th>
      <td><?php echo $trapial_employee->getTeam() ?></td>
    </tr>
    <tr>
      <th>Nivel:</th>
      <td><?php echo $trapial_employee->getNivel() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('employee/edit?id='.$trapial_employee->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('employee/index') ?>">List</a>
