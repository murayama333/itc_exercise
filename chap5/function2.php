<?php
function check_age($age){
	if ($age >= 20) {
		return "OK";
	}
	return "NG";
}

$result = check_age(20);
echo $result . PHP_EOL;
