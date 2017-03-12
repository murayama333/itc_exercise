<?php
require_once("Counter.php");

class HTMLCounter extends Counter{

  public $tag;

  public function get()
  {
    return "<$this->tag>" . parent::get() . "</$this->tag>";
  }
}
