<?php
require_once("MyHTML.php");

$myHTML = new MyHTML();

$link = new stdClass();
$link->title = "IT CARET";
$link->url = "https://itcaret.com";

$img = new stdClass;
$img->url = "https://itcaret.com/wp-content/uploads/2017/02/itc_logo.jpg";

$courses = ["Web Programming", "PHP Proramming", "Service Planning"];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>IT CARET</title>
  </head>
  <body>
    <?php $myHTML->img($img->url) ?>
    <?php $myHTML->ulist($courses)?>
    <?php $myHTML->a($link->title, $link->url); ?>
  </body>
</html>
