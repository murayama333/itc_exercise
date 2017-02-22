<?php
require_once("Tweet.php");

$tweet = new Tweet();
$tweet->message = "Hello World!";
$tweet->name = "John";
$tweet->dateTime = date("Y-m-d H:i:s");
$tweet->print();
