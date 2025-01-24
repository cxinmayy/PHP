<?php

$a = 10;
$b = 20;
echo "The sum is " . ($a + $b);

function fun1(): void
{
    global $a;
    $a = 40;
    $c = 80; //Not used
    echo "The sum is =" . ($a + $GLOBALS['a'] + $GLOBALS['b']);
}
echo "<br>";
fun1();


//It signifies that GLOBALS is a super global array in which A denotes the index of that array 
?>