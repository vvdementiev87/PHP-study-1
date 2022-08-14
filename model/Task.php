<?php


class Task {
    private string $description;
    private int $userId;
    private int $taskId;
    private bool $isDone;
    
    function __construct($description, $userId, $taskId)
    {
       $this->description = $description;
       $this->userId = $userId;
       $this->taskId = $taskId;
       $this->isDone = false;
    }

    public function markAsDone(): void
    {
        $this->isDone = true;
    }
    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription($description): self
    {
        $this->description = $description;
        return $this;
    }


    public function getIsDone(): bool
    {
        return $this->isDone;
    }
    
   

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getTaskId()
    {
        return $this->taskId;
    }

};