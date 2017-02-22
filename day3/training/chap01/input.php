<?php
$myText = $_GET["myText"];
$myPassword = $_GET["myPassword"];
$myRadio = $_GET["myRadio"];
$myCheckbox = $_GET["myCheckbox"];
$myHidden = $_GET["myHidden"];
$mySelect = $_GET["mySelect"];
$myTextarea = $_GET["myTextarea"];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>IT CARET</title>
  </head>
  <body>
    <h3>input.php</h3>
    <ul>
      <li>myText:<?php echo $myText; ?></li>
      <li>myPassword:<?php echo $myPassword; ?></li>
      <li>myRadio:<?php echo $myRadio; ?></li>
      <li>myCheckbox:<?php echo $myCheckbox; ?></li>
      <li>myHidden:<?php echo $myHidden; ?></li>
      <li>mySelect:<?php echo $mySelect; ?></li>
      <li>myTextarea:<?php echo $myTextarea; ?></li>
    </ul>
  </body>
</html>
