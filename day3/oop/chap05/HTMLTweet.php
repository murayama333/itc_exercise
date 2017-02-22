<?php
require_once("Tweet.php");

class HTMLTweet extends Tweet
{
  
  public function print()
  {
    echo "<p>" . PHP_EOL;
    parent::print();
    echo "</p>" . PHP_EOL;
  }
}
