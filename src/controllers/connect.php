<?php

require dirname(__DIR__) . '/config.php';

require dirname(__DIR__) . '/classes/Connection.php';

require dirname(__DIR__) . '/classes/TodoController.php';

$conn = new Connection();
$pdo = $conn->connect($dbhost, $dbport, $dbname, $dbusername, $dbpassword);
$todoController = new TodoController($pdo);