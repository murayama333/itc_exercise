<?php
function my_search($array, $target){
  for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $target) {
      return true;
    }
  }
  return false;
}

$target = 36;
$numbers = [12, 23, -14, -25, 0, 36];

$exist = my_search($numbers, $target);
if ($exist) {
  echo "Found" . PHP_EOL;
} else {
  echo "Not Found" . PHP_EOL;
}
