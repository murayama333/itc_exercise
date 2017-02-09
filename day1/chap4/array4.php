<?php
$points = [64, 76, 58, 72, 48];

$min = 100;
for($i = 0; $i < count($points); $i++){
	if ($min > $points[$i]) {
		$min = $points[$i];
	}
}

echo $min . PHP_EOL;
