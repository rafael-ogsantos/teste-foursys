<?php

$container = new \Pimple\Container();

$container['db'] = function () {
    $dsn = 'mysql:host=localhost;dbname=teste';
    $username = 'root';
    $passwd = '';
    $options = [
        \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    ];

    $pdo = new PDO($dsn, $username, $passwd, $options);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;
};
