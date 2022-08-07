<?php
//Реализуйте два класса: Comment и TaskService. Comment должен содержать свойства author (User),
//task (Task) и text (string). TaskService должен реализовывать статичный метод addComment(User, Task, text),
//добавляющий к задаче комментарий пользователя. Отношение между классами задачи и комментария должны быть
//построены по типу ассоциация, поэтому необходимо добавить соответствующее свойство и методы классу Task.

require_once 'Comment.php';
require_once 'TaskService.php';

$user1 = new User('i.ivanov', 'ivan@ivanov.ru');
$user2 = new User('i.semenov', 'ivan@semenov.ru');
$task1 = new Task($user1);

print_r($task1->getUser());

$comment1 = new Comment($user1, $task1, "Comment text");
$comment2 = new Comment($user2, $task1, "Comment text #2");
var_dump($comment1);
TaskService::addComment($comment1);
TaskService::addComment($comment2);

var_dump($task1->getComments());