<?php

$num1 = 10;
$num2 = 25;
$num3 = 15;


if ($num1 >= $num2) {
    if ($num1 >= $num3) {
        echo "The greatest number is: " . $num1;
    } else {
        echo "The greatest number is: " . $num3;
    }
} else {
    if ($num2 >= $num3) {
        echo "The greatest number is: " . $num2;
    } else {
        echo "The greatest number is: " . $num3;
    }
}
?>
