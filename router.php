<?php

class router
{
    
    private $routing = [

        "/add" =>                  ['controller' => "Student", 'action' => 'add'],
        "/addDb1" =>               ['controller' => "Student", 'action' => 'addDb1'],
        "/data_all" =>             ['controller' => "Student", 'action' => 'data_all'],
        "/clear" =>             ['controller' => "Student", 'action' => 'clear'],

        ];
        
    private $route = null;
    
    function __construct() {
        $this->route = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        
        if(!isset($this->routing[$this->route])){
            header("Location: add");
            die();
        }
   }
    
    
    public function start()
    {
        if(isset($this->routing[$this->route])){
            $route = $this->routing[$this->route];
            
            $controller = 'Controller\\' . $route['controller'] . 'Controller';
            $controller_obj = new $controller();
            return $controller_obj->$route['action']();
        }
    }
}