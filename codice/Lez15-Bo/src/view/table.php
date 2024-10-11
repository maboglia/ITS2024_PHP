<table>
  <thead>
    <tr>
      <th>Title</th>
      <th>Description</th>
      <th>Size</th>
      <th>Price</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($items as $item) :?>
      
      <tr>
        <td><?=$item -> title?></td>
        <td><?=$item -> description?></td>
        <td><?=$item -> size?></td>
        <td><?=$item -> price?></td>
      </tr>

    <?php endforeach; ?>
  </tbody>
</table>