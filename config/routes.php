<?php

$router->add('get', '/', function () use ($container) {
    return view('home');
});

$router->add('post', '/users/store', 'UsersController::store');
$router->add('get', '/users/(\d+)', 'UsersController::show');
