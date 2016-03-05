<?php
function add_mark($str){
	return "*" . $str . "*";
}

$result = add_mark("IT CARET");
echo $result . PHP_EOL;
