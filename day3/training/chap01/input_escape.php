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
      <li>myText:<?php echo htmlspecialchars($myText); ?></li>
      <li>myPassword:<?php echo htmlspecialchars($myPassword); ?></li>
      <li>myRadio:<?php echo htmlspecialchars($myRadio); ?></li>
      <li>myCheckbox:<?php echo htmlspecialchars($myCheckbox); ?></li>
      <li>myHidden:<?php echo htmlspecialchars($myHidden); ?></li>
      <li>mySelect:<?php echo htmlspecialchars($mySelect); ?></li>
      <li>myTextarea:<?php echo htmlspecialchars($myTextarea); ?></li>
    </ul>
  </body>
</html>
