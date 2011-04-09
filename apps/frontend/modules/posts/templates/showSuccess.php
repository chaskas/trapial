<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $trapial_posts->getId() ?></td>
    </tr>
    <tr>
      <th>Post author:</th>
      <td><?php echo $trapial_posts->getPostAuthorId() ?></td>
    </tr>
    <tr>
      <th>Post content:</th>
      <td><?php echo $trapial_posts->getPostContent() ?></td>
    </tr>
    <tr>
      <th>Post title:</th>
      <td><?php echo $trapial_posts->getPostTitle() ?></td>
    </tr>
    <tr>
      <th>Comment count:</th>
      <td><?php echo $trapial_posts->getCommentCount() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $trapial_posts->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $trapial_posts->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('posts/edit?id='.$trapial_posts->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('posts/index') ?>">List</a>
