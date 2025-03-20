<?php
function printStarPattern($starCount) {
    // Find the maximum possible rows where sum of (1 to n) = starCount
    $n = 1;
    while (($n * ($n + 1)) / 2 <= $starCount) {
        $n++;
    }
    $n--; // Adjust n to the last valid value

    // Check if the exact pattern can be formed
    if (($n * ($n + 1)) / 2 == $starCount) {
        for ($i = 1; $i <= $n; $i++) {
            // Print spaces for pyramid shape
            echo str_repeat(" ", $n - $i);
            // Print stars for pyramid structure
            echo str_repeat("* ", $i);
            echo PHP_EOL;
        }
    } else {
        echo "The desired pattern can't be formed!" . PHP_EOL;
    }
}

// Example usage
$starCount = 15; 
printStarPattern($starCount);
?>
