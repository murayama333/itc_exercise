<?php
function max_value($points){
	$max = 0;
	for($i = 0; $i < count($points); $i++){
		if ($max < $points[$i]) {
			$max = $points[$i];
		}
	}
	return $max;
}

$result = max_value([20, 42, 15]);
echo $result . PHP_EOL;
