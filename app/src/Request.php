<?php

class Request {
    private string $host;
    private string $uri;
    private string $method;
    private string $params;

    public function __construct() {
        $this->host = $_SERVER['HTTP_HOST'];
        $this->uri = explode('?', $_SERVER['REQUEST_URI'])[0];
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->params = $_SERVER['QUERY_STRING'];
    }

    public function host(): string {
        return $this->host;
    }

    public function uri(): string {
        return $this->uri;
    }
    public function method(): string {
        return $this->method;
     }

     public function params(): array | string {
        return $this->params;
    }
}