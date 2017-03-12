<?php
try{
  $pdo = new PDO('mysql:host=localhost;dbname=itcaret', 'root', 'admin');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if (isset($_GET['id'])) {
    $st = $pdo->prepare("select * from category where id = :id");
    $st->bindParam(':id', $_GET['id']);
    $st->execute();
  } else {
    $st = $pdo->query('select * from category');
  }
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
    <h3>Category Search</h3>
    <form action="db12.php" method="get">
      <input type="number" name="id"><input type="submit" value="search">
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
