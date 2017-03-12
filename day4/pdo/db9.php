<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=itcaret', 'root', 'admin');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $st = $pdo->query('select id, name from categoly');
    while($row = $st->fetch()){
      echo $row['id']  . ':' . $row['name'] .  PHP_EOL;
    }
} catch (PDOException $e) {
    echo 'Catch' . PHP_EOL;
    echo $e->getMessage() . PHP_EOL;
} finally {
    $st = NULL;
    $pdo = NULL;
}
