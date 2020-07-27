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
            $r_method = $elem['method'];
            $r_path = $elem['path'];
            if ( $r_method == strtolower($method) && $r_path == strtolower($uri)) {
                if (function_exists($elem['handler'])){
                    $elem['handler']();
                } else {
                    echo 'A route hasn\'t been handled';   
                }
                exit();
            }
        }
        echo 'An unknown route';   
    }
}
