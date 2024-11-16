<?php
require_once '../src/app.php';

$app = new App();

$app->router->get('/', function () {
    echo 'test';
});

$app->start();

