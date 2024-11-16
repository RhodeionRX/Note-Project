<?php 
require_once __DIR__ . "/Router.php";
require_once __DIR__ . "/Request.php";

class App 
{
    public function __construct() {
        $this->request = new Request();
        $this->router = new Router($this);
    }

    public Router $router;
    public Request $request;

    public function start() {
        $this->router->execute($this->request->uri());
    }
}