<?php

class TodoController {

    public function __construct(private PDO $pdo)
    {

    }

    // probably refactor 
    // sanitize
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

    public function deleteTodo(int $id): bool {
        $sql = "DELETE FROM todos WHERE id=:id";
        $query = $this->pdo->prepare($sql);
        $query->bindParam(':id', $id);
        $query->execute();
        return True;
    }

    public function addTodo(string $text, string $date) {
        try {
            $sql = "INSERT INTO todos(todo, creation_date) VALUES (:text, :date)";
            $query = $this->pdo->prepare($sql);
            $query->bindParam(':text', $text);
            $query->bindParam(':date', $date);
            $query->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    # update set done on click
    public function setDone(int $id): bool {

        return True;
    }
    
}