<?php

require dirname(__DIR__) . '/controllers/connect.php';

$clickedId = $_POST['delete'];

$todoController->deleteTodo($clickedId);
$todos = $todoController->getTodos();

header("Location: /", TRUE, 303);