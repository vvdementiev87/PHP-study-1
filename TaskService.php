<?php
require_once 'Comment.php';

class TaskService {
    static function addComment(Comment $comment)
    {                   
        $comment->task->addComments([$comment->author, $comment->text]);
    }
}