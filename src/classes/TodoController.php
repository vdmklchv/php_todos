<?php

require dirname(__DIR__) . '/classes/ToDo.php';

class TodoController {

    public function __construct(private PDO $pdo)
    {

    }

   // TODO: SEPARATE ALL from by pattern
    public function getTodos(string $pattern = null): array {
        if ($pattern === null) {
            $sql = 'SELECT * FROM todos';
        } else {
            $sql = "SELECT * FROM todos WHERE todo ILIKE '%$pattern%'";
        }

        $query = $this->pdo->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);

    }

    public function getTodoById(int $id): ToDo {
        $sql = "SELECT * FROM todos WHERE id = :id";
        $query = $this->pdo->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        

        return new ToDo($result['todo'], $result['isdone'], $result['creation_date'], $result['id']);

    }

    public function deleteTodo(int $id): bool {
        $sql = "DELETE FROM todos WHERE id=:id";
        $query = $this->pdo->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        return true;
    }

    public function addTodo(string $text, string $date): bool {
        try {
            $sql = "INSERT INTO todos(todo, creation_date) VALUES (:text, :date)";
            $query = $this->pdo->prepare($sql);
            $query->bindParam(':text', $text);
            $query->bindParam(':date', $date);
            $query->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        return true;
    }

    public function updateTodoText(ToDo $todo, string $updatedText): bool {

        return true;
    }

    # update set done on click
    public function setDone(int $id): bool {

        return True;
    }
    
}