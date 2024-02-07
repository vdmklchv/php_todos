<?php

$routes = [
    '/' => '../src/controllers/home.php',
    '/add' => '../src/controllers/add.php',
    '/search' => '../src/controllers/search.php',
    '/delete' => '../src/controllers/delete.php',
    '/update' => '../src/controllers/update.php',
];

$url = parse_url($_SERVER['REQUEST_URI']);

$user_query = null;

if (isset($url['query'][1]) && $url['query'][1] !== null) {
    $user_query = explode("=", $url['query'])[1];
}


if (isset($routes[$url['path']])) {
    require "{$routes[$url['path']]}";
} else {
    require dirname(__DIR__) . '/src/views/404.php';
}
