<h1>Topics</h1>
<table>
  <thead>
    <tr>
      <th>Title</td>
      <th>User ID</td>
      <th>Published</td>
      <th>Created</td>
      <th>Modified</td>
    </tr>
  </thead>
  <tbody>
    <?php foreach($topics as $topic) : ?>
      <tr>
        <td><?php echo $this->HTML->link($topic['Topic']['title'], array('controller'=>'topics', 'action'=>'view', $topic['Topic']['id'])); ?></td>
        <td><?php echo $topic['Topic']['user_id']; ?></td>
        <td><?php echo $topic['Topic']['visible']; ?></td>
        <td><?php echo $topic['Topic']['created']; ?></td>
        <td><?php echo $topic['Topic']['modified']; ?></td>
      </tr>
    <?php endforeach; ?>
    <?php unset($topic); ?>
  </tbody>
</table>
