<?php
require("HTMLCounter.php");

$counter = new HTMLCounter(10);
$counter->tag = "h1";

echo $counter->get() . PHP_EOL;
echo $counter->get() . PHP_EOL;
echo $counter->get() . PHP_EOL;
