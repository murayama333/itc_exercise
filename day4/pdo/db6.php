<?php
$pdo = new PDO('mysql:host=localhost;dbname=itcaret', 'root', 'admin');

$count = $pdo->exec("update category set name = 'Social' where id = 4");

echo $count . PHP_EOL;
