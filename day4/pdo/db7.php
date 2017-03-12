<?php
$pdo = new PDO('mysql:host=localhost;dbname=itcaret', 'root', 'admin');

$count = $pdo->exec("delete from category where id = 4");

echo $count . PHP_EOL;
