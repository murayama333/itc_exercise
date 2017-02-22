<?php
require("functions.php");
$records = get_csv_data("message.csv");
echo "<pre>";
var_dump($records);
echo "</pre>";
