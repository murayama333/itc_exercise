<?php
$points = [64, 76, 58, 72, 48];

$handle = fopen("array.txt", "w");
for ($i = 0; $i < count($points); $i++) { 
	$outputTxt = $points[$i] . PHP_EOL;
	fwrite($handle, $outputTxt);
}
fclose($handle);
