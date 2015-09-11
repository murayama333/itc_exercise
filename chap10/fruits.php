<?php
$fruits = $_POST["fruits"];
$type = $_POST["type"];

$color = "black";
if ($fruits === "apple" || $fruits === "cherry") {
    $color = "red";
} else if($fruits === "banana"){
    $color = "yellow";
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>IT CARET</title>
</head>
<body>
    <div style="color:<?php echo $color; ?>">
    <?php echo $fruits . "/" . $type; ?>
    <div>
</body>
</html>