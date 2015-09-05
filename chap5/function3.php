<?php
function addMark($str){
	return "*" . $str . "*";
}

$result = addMark("IT CARET");
echo $result . PHP_EOL;
