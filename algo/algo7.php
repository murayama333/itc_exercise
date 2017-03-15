<?php
function my_abs($array){
  $result = [];
  for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] > 0) {
      $result[] = $array[$i];
    } else {
      $result[] = -$array[$i];
    }
  }
  return $result;
}

function my_total($array){
  $result = 0;
  for ($i = 0; $i < count($array); $i++) {
    $result += $array[$i];
  }
  return $result;
}

$numbers = [12, 23, -14, -25, 0, 36];

$numbers = my_abs($numbers);
$total = my_total($numbers);
echo $total . PHP_EOL;
