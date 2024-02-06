<?php

require dirname(__DIR__) . '/controllers/connect.php';

$todoText = '';
if (isset($_POST['todo'])) {
    $todoText = $_POST['todo'];
    header("Location: /", TRUE, 303);
}

if ($todoText) {
    $todoController->addTodo($todoText, '2023-07-28', false);
}

require dirname(__DIR__) . '/views/add.view.php';