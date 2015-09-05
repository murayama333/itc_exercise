<?php
function checkAge($age){
	if ($age >= 20) {
		return "OK";
	}
	return "NG";
}

$result = checkAge(20);
echo $result . PHP_EOL;
