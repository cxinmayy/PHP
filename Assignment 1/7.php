<?php
function isMagicNumber($num) {
    $originalNum = $num;

  
    while ($num >= 10) {
        $num = array_sum(str_split($num));
    }


    if ($num == 1) {
        echo "$originalNum is a Magic Number." . PHP_EOL;
    } else {
        echo "$originalNum is Not a Magic Number!" . PHP_EOL;
    }
}


$inputNumber = 19; 
isMagicNumber($inputNumber);

$inputNumber = 20;
isMagicNumber($inputNumber);
?>
