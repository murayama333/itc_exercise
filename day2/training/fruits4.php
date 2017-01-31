<?php
$html = file_get_contents("https://s3-ap-northeast-1.amazonaws.com/itcaret/course/php/day2/data/fruits.html");
$lines = explode("\n", $html);
for ($i=0; $i < count($lines); $i++) {
  $line = $lines[$i];
  $pos = strpos($line, "<li>");
  if ($pos !== false) {
    echo $line . PHP_EOL;
  }
}
