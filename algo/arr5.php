<?php
$array = ['one', 'two', 'three', 'four', 'five'];

while(count($array) != 0) {
  $e = array_pop($array);
  echo $e . PHP_EOL;
}
