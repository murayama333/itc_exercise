<?php
$members = ["Ishihara", "Kashiwabara", "Kawano", "Hiroishi", "Minami"];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>IT CARET</title>
</head>
<body>
    <ul>
    	<?php for ($i=0; $i < count($members); $i++) { ?>
    		<li><?php echo $members[$i]; ?></li>
    	<?php } ?>
    </ul>
</body>
</html>