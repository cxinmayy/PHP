<?php

$n = 5;


$num1 = 0;
$num2 = 1;

echo "Fibonacci series up to $n numbers: ";

for ($i = 1; $i <= $n; $i++) {
    echo $num1 . ",";
    $next = $num1 + $num2;
    $num1 = $num2;
    $num2 = $next;
}
?>