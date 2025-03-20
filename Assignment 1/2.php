<?php
function countCharacterOccurrences($inputString) {
    // Remove spaces to count only characters (optional)
    $inputString = str_replace(" ", "", $inputString);

    // Convert string to lowercase for case-insensitive counting (optional)
    $inputString = strtolower($inputString);

    // Count occurrences of each character
    $charCounts = array_count_values(str_split($inputString));

    // Display the result
    foreach ($charCounts as $char => $count) {
        echo "$char occurs $count " . ($count > 1 ? "times" : "time") . "." . PHP_EOL;
    }
}

// Example usage
$inputString = "The class remains suspended.";
countCharacterOccurrences($inputString);
?>