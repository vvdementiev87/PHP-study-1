<?php
require_once 'Task.php';

class TaskProvider {
    private PDO $pdo;
    private array $tasks = [];

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function addTask (string $taskDescription, int $userId): bool
    {
        $statement = $this->pdo->prepare(
            'INSERT INTO tasks (description, userId) VALUES (:description, :userId)'
        );

        return $statement->execute([
            'description' => $taskDescription,
            'userId' => $userId
        ]);
    }

    public function getUndoneList (int $userId): array
    {
        $statement = $this->pdo->prepare(
            'SELECT * FROM tasks WHERE userId = :userId AND isDone = :isDone'
        );
        $statement->execute([
            'userId' => $userId,
            'isDone' => 0,
        ]);
        $result = $statement->fetchAll();
        
        if (!empty($result)){
            foreach ($result as $taskdb){               
                $task[] = new Task($taskdb['description'], $taskdb['userId'], $taskdb['id']);

            }
        }

        return $this->tasks = $task ?? [];
    }
    public function setTaskDone (int $key): bool
    {
        $statement = $this->pdo->prepare(
            'UPDATE tasks SET isDone = :isDone WHERE id = :taskId'
        );
        return $statement->execute([
            'taskId' => $key,
            'isDone' => 1,
        ]);
    }
    
}
