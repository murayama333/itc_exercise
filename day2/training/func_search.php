<?php
function search($array, $target) {
  $result = false;
  for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $target) {
      $result = true;
      break;
    }
  }
  return $result;
}

$points = [12, 23, 34, 45, 56, 67, 78, 89];
$target = $argv[1];

$result = search($points, $target);
if ($result == true) {
  echo "Found" . PHP_EOL;
} else {
  echo "Not Found" . PHP_EOL;
}
