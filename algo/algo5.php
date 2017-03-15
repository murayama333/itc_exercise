<?php
$numbers = [12, 23, -14, -25, 0, 36];

$max = 0;
for ($i = 0; $i < count($numbers); $i++) {
  $tmp = 0;
  if ($numbers[$i] > 0) {
    $tmp = $numbers[$i];
  } else {
    $tmp = -$numbers[$i];
  }
  if ($max < $tmp) {
    $max = $tmp;
  }
}
echo $max . PHP_EOL;
