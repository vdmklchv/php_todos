<?php

require dirname(__DIR__) . '/controllers/connect.php';

$toDo = null;

if (isset($_POST['update'])) {

    $clickedId = $_POST['update'];

    $toDo = $todoController->getTodoById($clickedId);

    $todoText = $toDo->getText();

    require dirname(__DIR__) . '/views/update.view.php';
}



