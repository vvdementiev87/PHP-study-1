<?php

$question1 = "Какая задача стоит перед вами сегодня?: ";
$question2 = "Сколько примерно времени эта задача займет?: ";

$name = (string)readline("Укажите Ваше имя: ");
$task1 = (string)readline($question1);
$period1 = (int)readline($question2);
$task2 = (string)readline($question1);
$period2 = (int)readline($question2);
$task3 = (string)readline($question1);
$period3 = (int)readline($question2);

$periodTotal = $period1 + $period2 + $period3;

echo "\n{$name}, сегодня у вас запланировано 3 приоритетных задачи на день:
- {$task1} ({$period1}ч)
- {$task2} ({$period2}ч)
- {$task3} ({$period3}ч)
Примерное время выполнения плана = {$periodTotal}ч";

?>