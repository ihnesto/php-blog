<?php 

class Router {

    public $routes;
    public $logger;
    public $staticRoutes;

    function __construct($logger, $staticRoutes) {
        $this->routes = [];
        $this->logger = $logger;
        $this->staticRoutes = $staticRoutes;
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
            if ( $r_method == strtolower($method) && $r_path == strtolower($uri) ) {
                if (function_exists($elem['handler'])) {
                    $elem['handler']();
                } else {
                    $this->logger->log('A route hasn\'t been handled: ' . "method->$method, url->$uri");   
                }
                exit();
            }
        }
        $this->logger->log('An unknown route: ' . "method->$method, url->$uri");   
    }

    function redirect($url) {

        header('Location: ' . $url);
        exit();
    }
}
