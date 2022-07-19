<?php

namespace app;

class Router
{
    private $url;
    private  $routes = [];

    /**
     * @param $url
     */
    public function __construct($url)
    {
        $this->url = $url;
    }


    public
    function get($path, $callback)
    {
       $route = new Route($path, $collable);
       $this->routes['GET'][] = $route;
       return $route;
    }

    public function run(){
        if(!isset($this->routes[$_SERVER['REQUEST_METHOD']])){
            throw new RouterException('REQUEST_METHOD does not exist');
        }
        foreach($this->routes[$_SERVER['REQUEST_METHOD']] as $route){
            if($route->match($this->url)){
                return $route->call();
            }
        }
        throw new RouterException('No matching routes');
    }
    
}