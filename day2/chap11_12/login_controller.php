<?php
function login($userID, $password) {

    $lines = file("user.csv", FILE_IGNORE_NEW_LINES);
    foreach ($lines as $line) {
        $user = explode(",", $line);
        if ($user[0] == $userID && $user[1] == $password) {
            return true;
        }
    }
    return false;
}

$userID = $_POST["userID"];
$password = $_POST["password"];

if (login($userID, $password) == true) {
	
	session_start();
	$_SESSION["userID"] = $userID;

	header("location: ./menu.php");
	// include("menu.php");
} else {
	header("location: ./login.php");
	// include("login.php");
}