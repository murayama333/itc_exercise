<?php
$points = [64, 76, 58, 72, 48];

$total = 0;
for($i = 0; $i < count($points); $i++){
	$total = $total + $points[$i];
}

echo $total . PHP_EOL;