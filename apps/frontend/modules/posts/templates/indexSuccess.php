<h1>Trapial postss List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Post author</th>
      <th>Post content</th>
      <th>Post title</th>
      <th>Comment count</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($trapial_postss as $trapial_posts): ?>
    <tr>
      <td><a href="<?php echo url_for('posts/show?id='.$trapial_posts->getId()) ?>"><?php echo $trapial_posts->getId() ?></a></td>
      <td><?php echo $trapial_posts->getPostAuthor() ?></td>
      <td><?php echo $trapial_posts->getPostContent() ?></td>
      <td><?php echo $trapial_posts->getPostTitle() ?></td>
      <td><?php echo $trapial_posts->getCommentCount() ?></td>
      <td><?php echo $trapial_posts->getCreatedAt() ?></td>
      <td><?php echo $trapial_posts->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('posts/new') ?>">New</a>
