<?php
$mas = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
$res = function (array $mas) : array {
    $masNew = [];
    $max = max($mas);
    $masNew['Максимальное значение'] = $max;
    $min = min($mas);
    $masNew['Минимальное значение'] = $min;
    $avg = array_sum($mas)/count($mas);
    $masNew['Среднее арифметическое'] = $avg;
    return $masNew;
};
$string = print_r($res($mas), true);
$data = [
    'id' => 2,
    'text' => 'Разработайте функцию aggregationData() с объявленными типами аргументов<br>
        и возвращаемого значения, принимающую в качестве аргумента массив целых чисел.<br>
        $mas = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];<br>
        Результатом работы функции должен быть<b>Задача.</b>  массив, содержащий три элемента:<br>
        max — наибольшее число, min — наименьшее число, avg — среднее арифметическое всех чисел<br> массива. Не использовать цикл!',
];
include_once __DIR__ . '/../../src/templates/template-page.phtml';



