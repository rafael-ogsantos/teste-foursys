<?php

function view(string $_name, array $vars = [])
{
    $template = __DIR__ . '/../views/template.php';
    if(!file_exists($template)){
        die("view {$_name} not found!");
    }

    if(!is_null($vars)){
        foreach ($vars as $key => $value) {
            ${$key} = $value;
        }
    }

    $content = "../views/{$_name}.php";
    include $template;
}

function asset(string $asset)
{
    return "/../assets/{$asset}";
}
