<?php

$question1 = "Какая задача стоит перед вами сегодня?: ";
$question2 = "Сколько примерно времени эта задача займет?: ";
$question3 = "Укажите количество задач, запланированных на день?: ";

$name = (string)readline("Укажите Ваше имя: ");
$periodTotal = 0;
$message = "";

do {
    $taskAmount=(int)readline($question3);
} while ($taskAmount <= 0);

for ($i=0; $i<$taskAmount; $i++){
    $task = (string)readline($question1);
    $period = (int)readline($question2);
    $message .= "- {$task} ({$period}ч)" . PHP_EOL;
    $periodTotal += $period;
}

echo "
{$name}, сегодня у вас запланировано {$taskAmount} приоритетных задачи на день:
{$message}Примерное время выполнения плана = {$periodTotal}ч";
