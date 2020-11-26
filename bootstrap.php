<?php

require __DIR__ . '/vendor/autoload.php';

$router = new \Src\Router;

require __DIR__ . '/config/containers.php';
require __DIR__ . '/config/routes.php';

try {
    $result = $router->run();
    $response = new \Src\Response;
    $params = [
        'container' => $container,
        'params' => $result['params']
    ];
    $response($result['action'], $params);
} catch (\Src\Exceptions\HttpExceptions $e) {
    echo json_encode(['error' => $e->getMessage()]);
}

