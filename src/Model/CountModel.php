<?php

namespace Model;

use PDO;
use PDOException;

class CountModel {
    protected $count = 0;

    public function __construct() {
    }

    public function setCount($val)
    {
        $this->count = $val;
    }

    public function getCount()
    {
        return $this->count;
    }
}
