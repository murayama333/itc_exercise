<?php
$html = file_get_contents("https://s3-ap-northeast-1.amazonaws.com/itcaret/course/php/day2/data/fruits.html");
$lines = explode("\n", $html);
echo count($lines) . PHP_EOL;
