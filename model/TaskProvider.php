<?php
require_once 'Task.php';

class TaskProvider {
    private array $tasksList = [];

    public function addTask (string $taskDescription)
    {
        $this->tasksList[] = new Task($taskDescription);
    }
    public function getUndoneList ()
    {
        return array_filter($this->tasksList, function($task){
            return !$task->getIsDone();
        });
    }
    public function setTaskDone (int $key)
    {
        $this->tasksList[$key]->markAsDone();
    }
    
}
