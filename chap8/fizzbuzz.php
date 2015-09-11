<?php

for ($i = 1; $i <= 30; $i++) { 

	$x = $i % 3;
	$y = $i % 5;

	if ($x == 0 && $y == 0) {
		echo "FizzBuzz" . PHP_EOL;
	} else if ($x == 0) {
		echo "Fizz" . PHP_EOL;
	} else if ($y == 0) {
		echo "Buzz" . PHP_EOL;
	} else {
		echo $i . PHP_EOL;
	}
}