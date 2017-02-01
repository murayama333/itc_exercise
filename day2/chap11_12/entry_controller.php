<?php

function entry($userID, $password) {
    $line = "$userID,$password" . PHP_EOL;
    file_put_contents("user.csv", $line, FILE_APPEND);
}

$userID = $_POST["userID"];
$password = $_POST["password"];

if ($userID !== "" && $password !== "") {
    // entry関数を呼び出す
    entry($userID, $password);
    // セッションを開始
    session_start();
    // セッションにユーザIDを保存
    $_SESSION["userID"] = $userID;

    // ログイン成功 menu.phpへリダイレクト
    header("location: ./menu.php");    
} else {
    // 登録失敗 entry.phpへリダイレクト
    header("location: ./entry.php");
}