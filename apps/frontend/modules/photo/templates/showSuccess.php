<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $trapial_photo->getId() ?></td>
    </tr>
    <tr>
      <th>Photo category:</th>
      <td><?php echo $trapial_photo->getPhotoCategoryId() ?></td>
    </tr>
    <tr>
      <th>Photo filename:</th>
      <td><?php echo $trapial_photo->getPhotoFilename() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('photo/edit?id='.$trapial_photo->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('photo/index') ?>">List</a>
