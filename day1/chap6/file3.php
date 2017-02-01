<?php
$fileData = file_get_contents("date.txt");
file_put_contents("copy.txt", $fileData);