<?php
$points = [12, 23, 34, 45, 56, 67, 78, 89];
$target = $argv[1];

$key = array_search($target, $points);

if ($key === false) {
  echo "Not Found" . PHP_EOL;
} else {
  echo "Found" . PHP_EOL;
}
