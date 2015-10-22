<?php

namespace Controller;

use Model\CountModel;

class CountController {
    private $model;
    
    public function __construct(CountModel $model) {
        $this->model = $model;
    }

    public function setCount() {
        $this->model->setCount($_GET['count']);
    }
}
