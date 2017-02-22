<?php
class Tweet
{
  public $message;
  public $name;
  public $dateTime;

  public function __construct($message, $name, $dateTime = NULL)
  {
    $this->message = $message;
    $this->name = $name;
    if ($dateTime == NULL){
      $dateTime = date('Y-m-d H:i:s');
    }
    $this->dateTime = $dateTime;
  }

  public function print()
  {
    if ($this->countLetters() > 14) {
      echo "Message too long." . PHP_EOL;
      return;
    }
    echo "$this->message ($this->name / $this->dateTime)" . PHP_EOL;
  }

  public function countLetters()
  {
    return strlen($this->message);
  }
}
