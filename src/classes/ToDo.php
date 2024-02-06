<?php

class ToDo {
    public function __construct(private string $text, private bool $isDone, private int $id = 0){
        
    }

    public function getText(): string {
        return $this->text;
    }

    public function getIsDone(): bool {
        return $this->isDone;
    }

    public function getId(): int {
        return $this->id;
    }
}