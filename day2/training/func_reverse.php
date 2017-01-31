<?php
function reverse($array) {
  $result = [];
  for ($i = count($array) - 1; $i >= 0; $i--) {
    $result[]= $array[$i];
  }
  return $result;
}

$points = [12, 23, 34, 45, 56, 67, 78, 89];

$reversed_points = reverse($points);
foreach ($reversed_points as $point) {
  echo $point . PHP_EOL;
}
