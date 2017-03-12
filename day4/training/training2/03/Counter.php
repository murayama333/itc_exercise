<?php
class Counter
{
    public $count;

    public function __construct($count = 1)
    {
        $this->count = $count;
    }

    public function get()
    {
        $count = $this->count;
        $this->count++;
        return $count;
    }
}
