<h1>Trapial photo categorys List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Category name</th>
      <th>Category description</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($trapial_photo_categorys as $trapial_photo_category): ?>
    <tr>
      <td><a href="<?php echo url_for('category/show?id='.$trapial_photo_category->getId()) ?>"><?php echo $trapial_photo_category->getId() ?></a></td>
      <td><?php echo $trapial_photo_category->getCategoryName() ?></td>
      <td><?php echo $trapial_photo_category->getCategoryDescription() ?></td>
      <td><?php echo $trapial_photo_category->getCreatedAt() ?></td>
      <td><?php echo $trapial_photo_category->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('category/new') ?>">New</a>
