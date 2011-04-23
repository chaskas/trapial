<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $trapial_photo_category->getId() ?></td>
    </tr>
    <tr>
      <th>Category name:</th>
      <td><?php echo $trapial_photo_category->getCategoryName() ?></td>
    </tr>
    <tr>
      <th>Category description:</th>
      <td><?php echo $trapial_photo_category->getCategoryDescription() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $trapial_photo_category->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $trapial_photo_category->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('category/edit?id='.$trapial_photo_category->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('category/index') ?>">List</a>
