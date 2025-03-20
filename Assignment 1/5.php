<?php
function isEvilNumber($num) {
    
    $binary = decbin($num);

    
    $countOnes = substr_count($binary, '1');

   
    if ($countOnes % 2 == 0) {
        echo "$num is an Evil Number." . PHP_EOL;
    } else {
        echo "$num is Not an Evil Number!" . PHP_EOL;
    }
}


$inputNumber = 23; 
isEvilNumber($inputNumber);

$inputNumber = 3; 
isEvilNumber($inputNumber);
?>
