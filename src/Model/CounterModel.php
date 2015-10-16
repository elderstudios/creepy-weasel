<?php 

namespace Model;

class CounterModel {
    public $count;

    public function __construct()
    {
        $this->count = $_SESSION['count'];
    }

    public function increment()
    {
        $this->count = ++$_SESSION['count'];
    }
}