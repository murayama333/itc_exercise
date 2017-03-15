<?php
$array = ['one', 'two', 'three', 'four', 'five'];

while(count($array) != 0) {
  $e = array_shift($array);
  echo $e . PHP_EOL;
}
