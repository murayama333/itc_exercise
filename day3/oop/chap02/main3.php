<?php
require_once("Tweet.php");

$tweet = new Tweet();
$tweet->message = "Pen Pineapple Apple Pen";
$tweet->name = "John";
$tweet->dateTime = date("Y-m-d H:i:s");
$tweet->print();
