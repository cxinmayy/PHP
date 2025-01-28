<?php
//write a php script to reverse a string by word

$string = "Hello, welcome to the world of PHP programming!";


$reversedString = implode(" ", array_reverse(explode(" ", $string)));

echo "Original String: " . $string . "<br>";
echo "Reversed String by Word: " . $reversedString;
?>
