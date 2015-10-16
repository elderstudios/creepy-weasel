<?php

namespace View;

use Model\CounterModel;

class CounterView {
    private $model;
    private $route;
    
    public function __construct($route, CounterModel $model) {
        $this->route = $route;
        $this->model = $model;
    }
    
    public function output() {
        return $this->model->count . ' <br /> <a href="index.php?route='.$this->route.'&action=incrementCounter">Increment Counter</a>';
    }
}