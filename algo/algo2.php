<?php
$numbers = [12, 23, -14, -25, 0, 36];

$total = 0;
for ($i = 0; $i < count($numbers); $i++) {
  if ($numbers[$i] > 0) {
    $total += $numbers[$i];
  }
}
echo $total . PHP_EOL;
