<?php
$numbers = [12, 23, -14, -25, 0, 36];

for ($i = 0; $i < count($numbers); $i++) {
  if ($numbers[$i] > 0) {
    echo $numbers[$i] . PHP_EOL;
  } else {
    echo -$numbers[$i] . PHP_EOL;
  }
}
