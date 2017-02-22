<?php
require("functions.php");

$no = isset($_POST["no"]) ? $_POST["no"] : "";
$name = isset($_POST["name"]) ? $_POST["name"] : "";
$message = isset($_POST["message"]) ? $_POST["message"] : "";
if ($no === "" || $name === "" || $message === "") {
  header("Location: entry.html");
  return;
}

entry("message.csv", $no, $name, $message);
header("Location: list.php");
