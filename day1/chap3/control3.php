<?php
$age = 20;
$student = true;

if ($age >= 20 && $student == true) {
	echo "OK" . PHP_EOL;
}else if($age >= 20 && $student == false) {
	echo "OK" . PHP_EOL;
}else if($age < 20 && $student == true) {
	echo "OK" . PHP_EOL;
}else{
	echo "NG" . PHP_EOL;
}