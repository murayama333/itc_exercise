<?php
$points = [12, 23, 34, 45, 56, 67, 78, 89];
$target = $argv[1];

$exist = false;
for ($i = 0; $i < count($points); $i++) {
  if ($points[$i] == $target) {
    $exist = true;
    break;
  }
}

if ($exist == true) {
  echo "Found" . PHP_EOL;
} else {
  echo "Not Found" . PHP_EOL;
}
