<!-- //write a php in such a way that we want some values outside and use one function to calculate the factorial of that value and print the factorial outside the function -->
<?php
function factorial($n)
{
    if ($n == 0) {
        return 1;
    } else
        return $n * factorial($n - 1);

}
$num = 5;
$fact = factorial($num);
echo "Factorial of $num is $fact";
?>