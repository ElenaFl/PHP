<?php 
$n = 1;

switch($n) {  
    case 1 :
        echo "$n\n";
        $n++;
    case 2 :
        echo "$n\n";
        $n++;
    case 3 :
        echo "$n\n";
        $n++;
    case 4 :
        echo "$n\n";
        $n++;
    case 5 :
        echo "$n\n";
        $n++;    
    default:
        do {
            echo "$n\n";
            $n++;
        } while ($n <= 15);
}
