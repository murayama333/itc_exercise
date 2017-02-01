<?php
$points = [64, 76, 58, 72, 48];

$max = 0;
for($i = 0; $i < count($points); $i++){
	if ($max < $points[$i]) {
		$max = $points[$i];
	}
}

echo $max . PHP_EOL;