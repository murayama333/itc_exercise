<?php
$pdo = new PDO('mysql:host=localhost;dbname=itcaret', 'root', 'admin');
$st = $pdo->query('select * from category');
$rows = $st->fetchAll();
$st = NULL;
$pdo = NULL;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>IT CARET</title>
  </head>
  <body>
    <h3>Category List</h3>
    <table border="1">
      <tr>
        <th>ID</th>
        <th>NAME</th>
      </tr>
      <?php foreach ($rows as $row) { ?>
      <tr>
        <td><?php echo htmlspecialchars($row['id']) ?></td>
        <td><?php echo htmlspecialchars($row['name']) ?></td>
      </tr>
      <?php }?>
    </table>
  </body>
</html>
