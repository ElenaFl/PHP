<?php
$minMaxSum = function () {
    $mas = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
    $masNew = [];
    $min = $max = $mas[0];
    $keyMin = $keyMax = $sum = 0;
    foreach($mas as $key => $val) {
        $sum += $val;
        $masNew[$key] = $sum;
        
        if($min > $val) {
            $min = $val;
            $keyMin = $key;
        }
            elseif ($max < $val) {
                $max = $val;
                $keyMax = $key;
            }
            
        $res = $keyMax > $keyMin ? $masNew[$keyMax] - $masNew[$keyMin] - $mas[$keyMax] : $masNew[$keyMin] - $masNew[$keyMax] - $mas[$keyMin];
    }
    return  $res;
};
$string ='Сумма элементов между минимальным и максимальным значениями равна = ' . $minMaxSum();
$data = [
    'id' => 4,
    'text' => '* Дан массив $mas = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2]. Напишите алгоритм и найдите сумму между минимальным и максимальными значениями. Не используя готовые функции. Используйте цикл.** Используйте один цикл, в один проход.',
];
include_once __DIR__ . '/../../src/templates/template-page.phtml';
