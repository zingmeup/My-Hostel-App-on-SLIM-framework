<?php
require '../../vendor/autoload.php';

// instantiate the App object
$app = new \Slim\App();

// Add route callbacks
$app->get('/yo', function ($request, $response, $args) {
    return $response->withStatus(200)->write('Hello World! yo at yo');
});

$app->get('/ahoy', function ($request, $response, $args) {
    return $response->withStatus(200)->write('Hello World! yo at ahoy');
});

// Run application
$app->run();
