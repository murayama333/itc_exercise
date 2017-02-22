<?php
function get_csv_data($fileName){
  $lines = file($fileName, FILE_IGNORE_NEW_LINES);
  $records = [];
  foreach ($lines as $line) {
    $records[] = explode(",", $line);
  }
  return $records;
}

function search($records, $keyword, $index = 2){
  $result = [];
  foreach ($records as $record) {
    if (strpos($record[$index], $keyword) !== false) {
      $result[] = $record;
    }
  }
  return $result;
}

function h($str){
  echo htmlspecialchars($str, ENT_QUOTES);
}
