<?php
set_time_limit(30);
echo "Вопрос: Сколько звезд на небе?\n";
echo "Варианты ответа (введите номер варианта ответа):\n";
echo "1. Миллиард\n2. Триллион\n3. Infinity\n";
$response = 0;

do {
 $response = +readline("Введите ответ: ");
} while ($response !== 1 && $response !== 2 && $response !== 3);

if ($response === 1 || $response === 2)  echo "Не верно!\n";
    else echo "Поздравляю, правильный ответ!\n";