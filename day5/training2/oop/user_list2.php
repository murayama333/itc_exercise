<?php
require("UserDAO.php");

$dao = new UserDAO();
$users = $dao->getList();
if ($users === false) {
  die("System Error.");
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
