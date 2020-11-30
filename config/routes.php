<?php

$router->add('get', '/', function () use ($container) {
    return view('home');
});
$router->add('get', '/users', 'UsersController::index');

$router->add('post', '/users/store', 'UsersController::store');
$router->add('get', '/user/(\d+)', 'UsersController::show');
$router->add('get', '/user/(\d+)/edit', 'UsersController::edit');
$router->add('get', '/user/(\d+)/delete', 'UsersController::destroy');
$router->add('post', '/users/update/(\d+)', 'UsersController::update');
