<?php
try{
  $pdo = new PDO('mysql:host=localhost;dbname=itcaret', 'root', 'admin');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $st = $pdo->query("select * from user order by id;");
  $users = $st->fetchAll();
} catch(PDOException $e) {
  error_log($e->getMessage());
  error_log($e->getTraceAsString());
  die("System Error.");
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
  <h3>User List</h3>
  <table border="1">
    <tr>
      <th>ID</th>
      <th>EMAIL</th>
    </tr>
    <?php foreach ($users as $user) { ?>
      <tr>
        <td><?php echo htmlspecialchars($user['id'])?></td>
        <td><?php echo htmlspecialchars($user['email'])?></td>
      </tr>
      <?php } ?>
    </table>
  </body>
  </html>
