<?php
require("Counter.php");

$counter = new Counter();
echo $counter->get() . PHP_EOL;
echo $counter->get() . PHP_EOL;

$counter10 = new Counter(10);
echo $counter10->get() . PHP_EOL;
echo $counter10->get() . PHP_EOL;
