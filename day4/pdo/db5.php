<?php
$pdo = new PDO('mysql:host=localhost;dbname=itcaret', 'root', 'admin');

$count = $pdo->exec("insert into category values (4, 'Society')");

echo $count . PHP_EOL;
