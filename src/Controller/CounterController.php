<?php
namespace Controller;

use Model\CounterModel;

class CounterController {
    private $model;
    
    public function __construct(CounterModel $model) {
        $this->model = $model;
    }

    public function incrementCounter()
    {
        $this->model->increment();
    }
}