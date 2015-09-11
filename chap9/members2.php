<?php
$members = [
            ["Ishihara", 22, "Motion", "image1.png"],
            ["Kashiwabara", 22, "Boat", "image2.png"],
            ["Kawano", 21, "KnightScoop", "image3.png"],
            ["Hiroishi", 22, "Youtube", "image4.png"],
            ["Minami", 23, "WordPress", "image5.png"]
            ];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>IT CARET</title>
</head>
<body>
    <table>
		<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Fav</th>
			<th>Image</th>
		</tr>
    	<?php for ($i=0; $i < count($members); $i++) { ?>
    		<tr>
    			<td><?php echo $members[$i][0]; ?></td>
    			<td><?php echo $members[$i][1]; ?></td>
    			<td><?php echo $members[$i][2]; ?></td>
    			<td><img src="<?php echo $members[$i][3]; ?>"></td>
    		</tr>
    	<?php } ?>
    </table>
</body>
</html>