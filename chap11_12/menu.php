<?php

session_start();

$userID = $_SESSION["userID"];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>IT CARET</title>
</head>
<body>  
    <img src="logo.png">
    <?php echo $userID . "さんでログイン中"; ?>
    <hr>
    <ul>
        <li>Menu 1</li>
        <li>Menu 2</li>
        <li>Menu 3</li>
    </ul>
</body>
</html>    