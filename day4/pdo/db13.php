<?php
try{
  $pdo = new PDO('mysql:host=localhost;dbname=itcaret', 'root', 'admin');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if (isset($_POST['id']) && isset($_POST['name'])) {
    $st = $pdo->prepare("insert into category values(:id, :name)");
    $st->bindParam(':id', $_POST['id']);
    $st->bindParam(':name', $_POST['name']);
    $st->execute();
  }
  $st = $pdo->query('select * from category');
  $rows = $st->fetchAll();
} catch(PDOException $e){
  die("SQL Error");
} finally {
  $st = NULL;
  $pdo = NULL;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>IT CARET</title>
  </head>
  <body>
    <h3>Category Entry</h3>
    <form action="db13.php" method="post">
      <input type="text" name="id">
      <input type="text" name="name">
      <input type="submit" value="save">
    </form>
    <hr>
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
