<?php
$categories = [10, 11, 12];

$pdo = new PDO('mysql:host=localhost;dbname=itcaret', 'root', 'admin');

$count = 0;
foreach ($categories as $id) {
  $st = $pdo->prepare("delete from category where id = :id");
  $st->bindParam(':id', $id);
  $st->execute();
  $count += $st->rowCount();
}

echo $count . PHP_EOL;
