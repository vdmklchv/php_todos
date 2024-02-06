<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>

<?php require dirname(__DIR__) . '/views/partials/nav.part.php'; ?>

<body>
    <h1>Add ToDo</h1>
    <form action="/add" method="post">
        <label for="todo"></label>
        <input type="text" name="todo" id="todoinput" placeholder="New todo...">
        <input type="submit" value="Submit">
    </form>
</body>
</html>