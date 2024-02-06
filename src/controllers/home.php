<?php

require dirname(__DIR__) . '/controllers/connect.php';


$todos = $todoController->getTodos();


require dirname(__DIR__) . '/views/home.view.php';