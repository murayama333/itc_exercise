<?php
function my_sort($array){
  for ($i = 0; $i < count($array) - 1; $i++) {
    for ($j = 0; $j < count($array) - 1 - $i; $j++) {
      if ($array[$j] > $array[$j + 1]) {
        $tmp = $array[$j];
        $array[$j] = $array[$j + 1];
        $array[$j + 1] = $tmp;
      }
    }
  }
  return $array;
}

$numbers = [12, 23, -14, -25, 0, 36];
$numbers = my_sort($numbers);

for ($i = 0; $i < count($numbers); $i++) {
  echo $numbers[$i] . PHP_EOL;
}
