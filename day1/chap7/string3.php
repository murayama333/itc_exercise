<?php
$lines = file("score.csv", FILE_IGNORE_NEW_LINES);
for ($i = 0; $i < count($lines); $i++) { 
	$line = $lines[$i];
	$items = explode(",", $line);
	if($items[1] >= 22){
		echo $line . PHP_EOL;
	}
}