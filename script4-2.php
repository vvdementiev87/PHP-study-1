<?php
//Разработайте функцию с объявленными типами аргументов и возвращаемого значения,
//принимающую в качестве аргумента массив целых чисел. Результатом работы функции должен быть массив,
//содержащий три элемента: max — наибольшее число, min — наименьшее число,
//avg — среднее арифметическое всех чисел массива;

$arrInput = [1, 17, 12, -12, -17, -1, 8];

function counterArr(array $input): array
{
    $minValue = $maxValue = current($input);
    $sum =0;

    foreach($input as $value){
        $value >= $minValue ?: $minValue = $value;
        $value <= $maxValue ?: $maxValue = $value;
        $sum += $value;
    }
    $avg = $sum / count($input);

    return [
        "minValue" => $minValue,
        "maxValue" => $maxValue,
        "avg" => $avg,
    ];
};

print_r (counterArr($arrInput));