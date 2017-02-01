<?php
	$size = $_GET["size"];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>IT CARET</title>
</head>
<body>
<?php if ($size === "l") { ?>
    <h1>Large</h1>
<?php } elseif ($size === "m") { ?>
    <h2>Medium</h2>
<?php } elseif ($size === "s") { ?>
    <h3>Small</h3>
<?php } ?>
</body>
</html>