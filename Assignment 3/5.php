<?php

function Armstrong($number) {
    $sum = 0;
    $temp = $number;
    $length = 0;

    while ($temp != 0) {
        $temp = (int)($temp / 10);
        $length++;
    }

    $temp = $number;

    while ($temp != 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $length);
        $temp = (int)($temp / 10);
    }

    if ($sum == $number) {
        return $number . " is an Armstrong number.";
    } else {
        return $number . " is not an Armstrong number.";
    }
}

echo Armstrong(146511208);

?>
