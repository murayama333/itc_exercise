<?php
$categories = [
  ['id' => 10, 'name' => 'Music'],
  ['id' => 11, 'name' => 'Picture'],
  ['id' => 12, 'name' => 'Art']
];

$pdo = new PDO('mysql:host=localhost;dbname=itcaret', 'root', 'admin');

$count = 0;
foreach ($categories as $category) {
  $st = $pdo->prepare("insert into category values (:id, :name)");
  $st->bindParam(':id', $category['id']);
  $st->bindParam(':name', $category['name']);
  $st->execute();
  $count += $st->rowCount();
}

echo $count . PHP_EOL;
