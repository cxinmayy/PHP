<?php
function printHourglassPattern($rows) {
   
    if ($rows % 2 == 0) {
        echo "The hourglass pattern can't be formed!" . PHP_EOL;
        return;
    }

    $n = floor($rows / 2); 

    for ($i = $n; $i >= 0; $i--) {
        echo str_repeat(" ", $n - $i);
        echo str_repeat("* ", 2 * $i + 1);
        echo PHP_EOL;
    }

    
    for ($i = 1; $i <= $n; $i++) {
        echo str_repeat(" ", $n - $i);
        echo str_repeat("* ", 2 * $i + 1);
        echo PHP_EOL;
    }
}


$rowCount = 5;
printHourglassPattern($rowCount);
?>