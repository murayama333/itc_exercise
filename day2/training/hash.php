<?php
$sales = [
  ["date" => "2017/01/01", "name" => "Apple", "amount" => 1000],
  ["date" => "2017/01/01", "name" => "Banana", "amount" => 2000],
  ["date" => "2017/01/01", "name" => "Cherry", "amount" => 3000],
  ["date" => "2017/01/02", "name" => "Apple", "amount" => 2000],
  ["date" => "2017/01/02", "name" => "Banana", "amount" => 1000],
  ["date" => "2017/01/03", "name" => "Apple", "amount" => 3000],
  ["date" => "2017/01/03", "name" => "Cherry", "amount" => 5000]
];

$total = 0;
for ($i = 0; $i < count($sales); $i++) {
  $sale = $sales[$i];
  if ($sale["name"] == "Apple") {
    $total += $sale["amount"];
  }
}

echo $total . PHP_EOL;
