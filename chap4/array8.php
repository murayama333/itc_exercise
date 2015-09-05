<?php
$points = [[10, 20], [30, 40, 50, 60], [70, 80, 90]];

for ($i = 0; $i < count($points) ; $i++) { 
	for ($j = 0; $j < count($points[$i]); $j++) { 
		echo $points[$i][$j] . PHP_EOL;
	}
}
