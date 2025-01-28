<?php
$n = 5;
$factorial = 1;
$i = 1;

do {
    $factorial *= $i;
    $i++;
} while ($i <= $n);

echo "Factorial of $n is: $factorial";
?>