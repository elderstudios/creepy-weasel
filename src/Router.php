<?php

class Router {
    private $table = [];
    
    public function __construct() {
        $this->table['home'] = new Route(Model\HomeModel::class, View\HomeView::class, Controller\HomeController::class);
        $this->table['guestbook'] = new Route(Model\GuestbookModel::class, View\GuestbookView::class, Controller\GuestbookController::class);
        $this->table['count'] = new Route(Model\CountModel::class, View\CountView::class, Controller\CountController::class);
    }
    
    public function getRoute($route) {
        $route = strtolower($route);

        //Return a default route if no route is found
        if (!isset($this->table[$route])) {
            return $this->table['home'];  
        }
        
        return $this->table[$route];        
    }
}
