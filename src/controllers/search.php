<?php

//TODO: When search is done and nothing found, process it.

require dirname(__DIR__) . '/controllers/connect.php';

$todos = $todoController->getTodos($user_query);

require dirname(__DIR__) . '/views/home.view.php';