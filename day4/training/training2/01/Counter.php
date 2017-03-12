<?php
class Counter
{
    public $count = 1;

    public function get()
    {
        $count = $this->count;
        $this->count++;
        return $count;
    }
}
