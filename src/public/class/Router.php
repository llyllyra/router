<?php

class Router
{
    private $routes = [];
    
    static function route(string $path, callable $callback)
    : void {
        global $routes;
        $routes[$path] = $callback;
    }
    
    static function run()
    : void
    {
        global $routes;
        $uri = $_SERVER['REQUEST_URI'];
        $found = FALSE;
        foreach ($routes as $path => $callback) {
            if ($path !== $uri) continue;
        
            $found = TRUE;
            $callback();
        }
    
        if (!$found) {
            $notFoundCallback = $routes['/404'];
            $notFoundCallback();
        }
    }
  
}