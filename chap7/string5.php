<?php
$lines = file("score.csv", FILE_IGNORE_NEW_LINES);
$total = 0;
for ($i = 0; $i < count($lines); $i++) { 
	$line = $lines[$i];
	$items = explode(",", $line);
	$total = $total + $items[2];
}
echo $total . PHP_EOL;