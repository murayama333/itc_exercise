<?php
function getTweets(){
    $tweets = [];
    $lines = file("tweet.csv", FILE_IGNORE_NEW_LINES);
    foreach ($lines as $line) {
        $tweet = explode(",", $line);
        $tweets[] = $tweet;
    }
    $tweets = array_reverse($tweets);
    return $tweets;
}

session_start();
$userID = $_SESSION["userID"];

$tweets = getTweets();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>IT CARET</title>
</head>
<body>  
    <img src="logo.png">
    <?php echo htmlspecialchars($userID) . "さんでログイン中"; ?>
    <hr>
    <form action="tweet_controller.php" method="post">
        <input type="text" name="comment">
        <input type="submit" value="tweet">
    </form>

    <ul>
    <?php foreach ($tweets as $tweet) { ?>
        <li><?php echo htmlspecialchars($tweet[0]); ?>
            <span style="font-size:14px">(<?php echo htmlspecialchars($tweet[1] . "/" . $tweet[2]); ?>)</span>
        </li>
    <?php } ?>
    </ul>

    <a href="menu.php">戻る</a>
</body>
</html>    