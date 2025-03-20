<?php
function isPerfectNumber($num) {
    if ($num < 1) {
        echo "$num is Not a Perfect Number!" . PHP_EOL;
        return;
    }

    $sum = 0;

   
    for ($i = 1; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            $sum += $i;
        }
    }

    
    if ($sum == $num) {
        echo "$num is a Perfect Number." . PHP_EOL;
    } else {
        echo "$num is Not a Perfect Number!" . PHP_EOL;
    }
}


$inputNumber = 28; 
isPerfectNumber($inputNumber);

$inputNumber = 15;
isPerfectNumber($inputNumber);
?>