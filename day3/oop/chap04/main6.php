<?php
require_once("Tweet.php");
$tweet = new Tweet("Hello World!", "John");
$tweet->message = "PPAP";
$tweet->print();
