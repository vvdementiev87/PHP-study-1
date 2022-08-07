<?php
//Разработайте класс Task, выполняющий ответственность обычной задачи Todo-списка.
//Класс должен содержать приватные свойства description, dateCreated, dateUpdated,
//dateDone, priority (int), isDone (bool) и обязательное user (User).
//В качества класса пользователя воспользуйтесь разработанным на уроке.
//Класс Task должен содержать все необходимые для взаимодействия со свойствами методы (getters, setters).
// При вызове метода setDescription обновляйте значение свойства dateUpdated.
//Разработайте метод markAsDone, помечающий задачу выполненной, а также обновляющий свойства dateUpdated и dateDone.

require_once 'Task.php';
$user1 = new User('i.ivanov', 'ivan@ivanov.ru');
$task1 = new Task($user1);

print_r($task1->getUser());
$format = 'd.m.Y H:i:s';
echo $task1->getDateCreated()->format($format) . PHP_EOL;
$task1->markAsDone();
echo $task1->getDateDone()->format($format) . PHP_EOL;