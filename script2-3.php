<?php

$question = "Введите число счета: ";

do {
    $taskAmount=(int)readline($question);
    echo PHP_EOL;
} while ($taskAmount <= 0);

switch (true) {
    case ((($taskAmount % 8) == 1)):
        echo "Большой палец";
        break;
    case ((($taskAmount % 8) == 2) || (($taskAmount % 8) == 0)):
        echo "Указательный палец";
        break;
    case ((($taskAmount % 8) == 3) || (($taskAmount % 8) == 7)):
        echo "Средний палец";
        break;
    case ((($taskAmount % 8) == 4) || (($taskAmount % 8) == 6)):
        echo "Безымяный палец";
        break;
    case ((($taskAmount % 8) == 5)):
        echo "Мизинец";
        break;    
}
