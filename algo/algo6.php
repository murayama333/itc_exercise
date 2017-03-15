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

$numbers = [12, 23, -14, -25, 0, 36];

$numbers = my_abs($numbers);

foreach ($numbers as $number) {
  echo $number . PHP_EOL;
}
