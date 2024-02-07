<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<h1>Update ToDo</h1>
    <form action="/update-new-text" method="post">
        <label for="todo"></label>
        <input type="text" name="todo-text" id="todoinput" value="<?= $todoText ?>" >
        <input type="submit" value="Submit">
    </form>
</body>
</html>