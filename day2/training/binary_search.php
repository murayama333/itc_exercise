<?php

$points = [12, 23, 34, 45, 56, 67, 78, 89];
$target = $argv[1];

function binary_search($array, $target){
  $low = 0;
  $high = count($array) - 1;
  while($low < $high){
    $middle = ($low + $high) / 2;
    if ($array[$middle] == $target) {
      return true;
    } else if ($array[$middle] < $target) {
      $high = $middle - 1;
    } else  {
      $low = $middle + 1;
    }
  }
  return false;
}

$result = binary_search($points, $target);

if ($result == true) {
  echo "Found" . PHP_EOL;
} else {
  echo "Not Found" . PHP_EOL;
}
