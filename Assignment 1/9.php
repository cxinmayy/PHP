<?php

function findHCF($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}


function findLCM($a, $b) {
    return ($a * $b) / findHCF($a, $b);
}

function findHCFandLCM($num1, $num2, $num3) {
   
    $hcf = findHCF($num1, findHCF($num2, $num3));
    $lcm = findLCM($num1, findLCM($num2, $num3));
    echo "HCF = $hcf and LCM = $lcm" . PHP_EOL;
}


findHCFandLCM(550, 350, 740);
?>