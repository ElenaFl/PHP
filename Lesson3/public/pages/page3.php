<?php
$result = function(){
    $res = [];
    $len = 100;
    $min = 1;
    $max = 200;
    $i = 0;
    while (count($res) < $len) {
        $randNum = mt_rand($min, $max);
        if (!in_array($randNum, $res)) {
            $res[$i] = $randNum;
            $i++;
        }
    }
    return $res;
};
$string = print_r($result(), true);
$data = [
    'id' => 3,
    'text' => 'Используя mt_rand, сгенерируйте массив размером 100 элементов так,
        чтобы все элементы были в диапазоне от 1 до 200 УНИКАЛЬНЫЕ
        Используйте цикл. *Используйте только функции работы с массивами.',
];
include_once __DIR__ . '/../../src/templates/template-page.phtml';



