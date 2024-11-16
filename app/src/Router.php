<?php 

class Router {
    private App $app;

    private array $routes = [];
    public function get(string $path, callable $fn) {
        $this->routes[$path] = ['GET' => $fn];
    }

    public function post(string $path, callable $fn) {
        $this->routes[$path] = ['POST'=> $fn];
    }    

    public function __construct(App $app) {
        $this->app = $app;
    }

    public function execute(string $path) {
        $this->routes[ $path ][ $this->app->method ]();
    }
}