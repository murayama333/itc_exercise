<?php
require("UserDAO.php");

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

$dao = new UserDAO();

if($dao->save($id, $password, $email)){
  header("Location: user_list.php");
}else{
  die("System Error.");
}
