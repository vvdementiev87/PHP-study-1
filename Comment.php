<?php

require_once 'Task.php';

class Comment {
    public User $author;
    public Task $task;
    public string $text;

    function __construct(User $user, Task $task, string $text)
    {
       $this->author = $user;
       $this->task = $task;
       $this->text = $text;
    }
}