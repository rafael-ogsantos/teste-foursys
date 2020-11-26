<?php

function view(string $_name, array $vars = [])
{
    $_filename = __DIR__ . "/../views/{$_name}.php";
    if(!file_exists($_filename)){
        die("view {$_name} not found!");
    }

    if(!is_null($vars)){
        foreach ($vars as $key => $value) {
            ${$key} = $value;
        }

    }

    include_once $_filename;
}