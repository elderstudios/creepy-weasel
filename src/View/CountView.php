<?php
namespace View;

use Model\CountModel;

class CountView {
    private $model;
    private $route;
    
    public function __construct($route, CountModel $model) {
        $this->route = $route;
        $this->model = $model;
    }
    
    public function output() {
        return '<form method="get">
                <input type="hidden" name="route" value="count" />
                <input type="hidden" name="action" value="setcount" />

                COUNT: ' . $this->model->getCount() . '<br/>
                <button type="submit" value="' . ($this->model->getCount()+1) . '" name="count" id="post">Increase count</button>
            </form>';
    }   
}
