<?php
$handle = fopen("date.txt", "w");
$outputTxt = date("Y-m-d H:i:s");
fwrite($handle, $outputTxt);
fclose($handle);
