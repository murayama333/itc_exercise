<?php
$pdo = new PDO('mysql:host=localhost;dbname=itcaret', 'root', 'admin');

$st = $pdo->query('select * from category where id = 2');

while($row = $st->fetch()){
  echo $row['id']  . ':' . $row['name'] .  PHP_EOL;
}
