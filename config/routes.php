<?php

$router->add('get', '/', function () use ($container) {
    return 'home';
});

$router->add('get', '/users/(\d+)', 'UsersController::show');
