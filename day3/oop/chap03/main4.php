<?php
require_once("Tweet.php");
$tweet = new Tweet("Hello World!", "John", date("Y-m-d H:i:s"));
$tweet->print();
