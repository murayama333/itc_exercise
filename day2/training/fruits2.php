<?php
$html = file_get_contents("https://s3-ap-northeast-1.amazonaws.com/itcaret/course/php/day2/data/fruits.html");
$len = strlen($html);
echo $len . PHP_EOL;
