<?php

//write a php script to reflect the total number of words present in a string as well as print word by word from this string

$string = "Hello, welcome to the world of PHP programming!";

$totalWords = str_word_count($string);


echo "Total number of words in the string: " . $totalWords . "<br>";


$words = str_word_count($string, 1);
echo "Words in the string:<br>";

foreach ($words as $word) {
    echo $word . "<br>";
}
?>