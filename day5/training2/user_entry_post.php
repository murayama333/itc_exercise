<?php
$id = filter_input(INPUT_POST, "id");
$password = filter_input(INPUT_POST, "password");
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

if ($id === false || strlen($id) == 0 || strlen($id) > 20) {
  die("ID is invalid.");
}

if ($password === false || strlen($password) == 0 || strlen($password) > 20) {
  die("Pass is invalid.");
}

if ($email === false || strlen($email) == 0 || strlen($email) > 200) {
  die("Email is invalid.");
}

try{
  $pdo = new PDO('mysql:host=localhost;dbname=itcaret', 'root', 'admin');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $st = $pdo->prepare("insert into user values(:id, :password, :email)");
  $st->bindParam(":id", $id);
  $st->bindParam(":password", $password);
  $st->bindParam(":email", $email);
  $st->execute();
} catch(PDOException $e){
  error_log($e->getMessage());
  error_log($e->getTraceAsString());
  die("System Error.");
} finally{
  $st = NULL;
  $pdo = NULL;
}

header("Location: user_list.php");
