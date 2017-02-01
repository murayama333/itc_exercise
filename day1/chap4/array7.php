<?php
$scores = ['suzuki' => ['math' => 72, 'english' => 90], 'yamada' => ['math' => 64, 'english' => 82]];

foreach ($scores as $key => $value) {
	$score = $value['math'] + $value['english'];
	echo "$key : $score" . PHP_EOL;
}
