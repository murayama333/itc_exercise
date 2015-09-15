<?php

function entry($comment, $userID, $date) {
	$line = "$comment,$userID,$date" . PHP_EOL;
	file_put_contents("tweet.csv", $line, FILE_APPEND);
}

$comment = $_POST["comment"];
if ($comment != "") {

	session_start();
	$userID = $_SESSION["userID"];

	$date = date("Y-m-d H:i:s");

	entry($comment, $userID, $date);
} 

header("location: ./tweet.php");
