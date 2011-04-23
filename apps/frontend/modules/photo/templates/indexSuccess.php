<h1>Trapial photos List</h1>

<table width="100%">
  <thead>
    <tr>
      <th>Id</th>
      <th>Photo category</th>
      <th>Photo filename</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($trapial_photos as $trapial_photo): ?>
    <tr>
      <td><a href="<?php echo url_for('photo/show?id='.$trapial_photo->getId()) ?>"><?php echo $trapial_photo->getId() ?></a></td>
      <td><?php echo $trapial_photo->getPhotoCategoryId() ?></td>
      <td><?php echo image_tag("../uploads/photos/".$trapial_photo->getPhotoFilename(),array('width'=>100,'height'=> 100)) ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('photo/new') ?>">New</a>
