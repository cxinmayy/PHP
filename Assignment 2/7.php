<?php

$number = 8;

switch ($number % 2) {
    case 0:
        echo $number . " is an even number.";
        break;
    case 1:
        echo $number . " is an odd number.";
        break;
    default:
        echo "Invalid input !";
        break;
}
?>
