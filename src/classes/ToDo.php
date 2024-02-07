<?php

class ToDo {
    public function __construct(private string $text, private bool $isDone, private string $date, private int $id = 0){
        
    }

    public function getText(): string {
        return $this->text;
    }

    public function setText(string $newText): ToDo {
        $this->text = $newText;
        return $this;
    }

    public function getIsDone(): bool {
        return $this->isDone;
    }

    public function getId(): int {
        return $this->id;
    }
}