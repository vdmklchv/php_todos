<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
    </head>
    
    <?php require dirname(__DIR__) . '/views/partials/nav.part.php'; ?>

    <body>
        <h1>Home</h1>
        <form action="/search">
            <label for="search">
                <input type="text" name="search" id="search" placeholder="Enter search term...">
                <input type="submit" value="submit">
            </label>
        </form>
        <!-- Show todos -->
        <?php if ($todos): ?>
            <?php foreach ($todos as $todo): ?>
                    <li id="<?= $todo['id'] ?>">
                        <span><?= $todo['todo'] ?></span>
                        <form action="/delete" method="POST" style="display: inline-block">
                            <input type="hidden" value="<?= $todo['id'] ?>" name="delete">
                            <button>Delete</button>
                        </form>
                        <form action="/update" method="POST" style="display: inline-block">
                            <input type="hidden" value="<?= $todo['id'] ?>" name="update">
                            <button>Update</button>
                        </form>
                    </li>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No results. Add new todo or change search term.</p>
        <?php endif; ?>
    </body>

</html>