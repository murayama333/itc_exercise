<?php
$scores = ['suzuki' => ['math' => 72, 'english' => 90], 'yamada' => ['math' => 64, 'english' => 82]];

$mathTotal = 0;
foreach ($scores as $key => $value) {
	$mathTotal = $mathTotal + $value['math'];
}

echo $mathTotal . PHP_EOL;
