<?php
$numbers = [12, 23];

$tmp = $numbers[0];
$numbers[0] = $numbers[1];
$numbers[1] = $tmp;

for ($i = 0; $i < count($numbers); $i++) {
  echo $numbers[$i] . PHP_EOL;
}
