<?php

echo "Prime numbers from 1 to 100 are: ";

for ($num = 2; $num <= 100; $num++) {
    $isprime = true;


    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            $isprime = false;
            break;
        }
    }


    if ($isprime) {
        echo $num . " ";
    }
}
?>