<?php 
$i = 0;

do {
    $age = readline("Введите Ваш возраст: ");
    if ($age < 0 || $age > 100) {
        echo "\033[31mОшибка!\033[0m \n";
        break;
    }
    $i++;
} while($i <= 100); 