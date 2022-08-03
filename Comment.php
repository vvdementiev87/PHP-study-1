<?php

require_once 'Task.php';

class Comment {
    private User $author;
    private Task $task;
    private string $text;
}