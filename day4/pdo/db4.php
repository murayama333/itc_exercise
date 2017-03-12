<?php
$pdo = new PDO('mysql:host=localhost;dbname=itcaret', 'root', 'admin');

$st = $pdo->query('select * from book inner join category on book.cate_id = category.id;');

while($row = $st->fetch()){
  echo $row['title']  . ':' . $row['name'] .  PHP_EOL;
}
