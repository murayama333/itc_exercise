<?php
$pdo = new PDO('mysql:host=localhost;dbname=itcaret', 'root', 'admin');

$st = $pdo->query('select count(*) from category');

while($row = $st->fetch()){
  echo $row[0].  PHP_EOL;
}
