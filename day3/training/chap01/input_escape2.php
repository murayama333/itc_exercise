<?php
function h($str){
  echo htmlspecialchars($str, ENT_QUOTES);
  // return htmlspecialchars($str, ENT_QUOTES);
}
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
      <li>myText:<?php h($myText); ?></li>
      <li>myPassword:<?php h($myPassword); ?></li>
      <li>myRadio:<?php h($myRadio); ?></li>
      <li>myCheckbox:<?php h($myCheckbox); ?></li>
      <li>myHidden:<?php h($myHidden); ?></li>
      <li>mySelect:<?php h($mySelect); ?></li>
      <li>myTextarea:<?php h($myTextarea); ?></li>
    </ul>
  </body>
</html>
