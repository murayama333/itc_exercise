<?php
$id = filter_input(INPUT_POST, "id");
$password = filter_input(INPUT_POST, "password");

if ($id === false || strlen($id) == 0 || strlen($id) > 20) {
  header("Location: login.php");
  return;
}

if ($password === false || strlen($password) == 0 || strlen($password) > 20) {
  header("Location: login.php");
  return;
}

$loginStatus = false;
try{
  $pdo = new PDO('mysql:host=localhost;dbname=itcaret', 'root', 'admin');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $st = $pdo->prepare("select * from user where id = ? and password = ?");
  $st->bindParam(1, $id);
  $st->bindParam(2, $password);
  $st->execute();
  $loginStatus = count($st->fetchAll()) == 1;
} catch(PDOException $e){
  error_log($e->getMessage());
  error_log($e->getTraceAsString());
  die("DB Error.");
} finally{
  $st = NULL;
  $pdo = NULL;
}

if ($loginStatus) {
  // セッションを開始
  session_start();
  // セッションにユーザIDを保存
  $_SESSION["userID"] = $id;
  // ログイン成功 menu.phpへリダイレクト
  header("Location: menu.php");
}else{
  // ログイン失敗 login.phpへリダイレクト
  header("Location: login.php");
}
