<?php 

class Router {

public $routes;

function __construct() {
    $this->routes = [];
}

function get($path, $handler) {
    $this->routes[] = [ 
        'path' => $path,
        'handler' => $handler,
        'method' => 'get'
    ];
}

function post($path, $handler) {
    $this->routes[] = [ 
        'path' => $path,
        'handler' => $handler,
        'method' => 'post'
    ];
}

function  execute($method, $uri) {
    foreach( $this->routes as $elem) {
        $m = $elem['method'];
        $p = $elem['path'];
        if ( $m == $method) {
            if ($p == $uri) {
                $elem['handler']();
            }
        }
    }
}

}
