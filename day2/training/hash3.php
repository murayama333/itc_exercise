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

$max = 0;
$max_sale = NULL;
for ($i = 0; $i < count($sales); $i++) {
   $sale = $sales[$i];
   if ($max < $sale["amount"]) {
     $max = $sale["amount"];
     $max_sale = $sale;
   }
}
echo $max_sale["date"] . "," . $max_sale["name"] . ",". $max_sale["amount"] . PHP_EOL;
