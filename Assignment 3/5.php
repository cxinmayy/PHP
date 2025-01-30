<?php
function isArmstrong($number) {
    $originalNumber = $number;
    $sum = 0;
    $digits = strlen((string)$number);

    while ($number != 0) {
        $digit = $number % 10;
        $sum += pow($digit, $digits);
        $number = (int)($number / 10);
    }

    if ($sum == $originalNumber) {
        return true;
    } else {
        return false;
    }
}

$number = 153;

if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
?>