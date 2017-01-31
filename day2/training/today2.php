<?php
$today = date("Ymd");
if(@mkdir($today) == false){
  echo $today . " already exists." . PHP_EOL;
}
