<?php 
require_once __DIR__ . "/Router.php";
class App 
{
    public function __construct() {
        $this->initRequest();
        $this->router = new Router($this);
    }

    public string $host;
    public string $uri;
    public string $method;
    public string $params;
    public Router $router;

    public function start() {
        $this->router->execute($this->uri);
    }

    private function initRequest() {
        $this->host = $_SERVER['HTTP_HOST'];
        $this->uri = explode('?', $_SERVER['REQUEST_URI'])[0];
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->params = $_SERVER['QUERY_STRING'];
    }
}