<html>
<?php

$abc = 10;
echo "The Variable is $abc";
echo " <br> The Variable is" . $abc . " Okay";

//constant
define("a1", 20);
echo "<br>The Constant is " . a1;
echo "<br> The Constant is =" . constant('a1');

const b1 = 30;
echo "<br>The Constant is " . b1;
echo "<br> The Constant is =" . constant('b1');
?>

<?php echo "<br>";
echo "<br>";
$var1 = 20;
$var2 = 30;
$sum = $var1 + $var2;
echo "<br>The sum is:" . $sum;
$sum = $var1 - $var2;
echo "<br>The difference is:" . $sum;
$sum = $var1 * $var2;
echo "<br>The Multiplication i:" . $sum;
$sum = $var1 / $var2;
echo "<br>The Division is:" . $sum;
?>

<?php echo "<br>";
echo "<br>";
$var3 = 20;
$var4 = 30;
if ($var3 > $var4) {
    echo "<br>Greater is" . $var3;
} else {
    echo "Greater is" . $var4;
}

?>

<?php echo "<br>";
echo "<br>";
$x = 10;
echo ++$x;
?>


<?php echo "<br>";
echo "<br>";
$x = 100;
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
?>

<?php echo "<br>";
echo "<br>";
$x = 100;
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}
?>

<?php echo "<br>";
echo "<br>";
$var5 = 50;
if ($var5 != 60) {
    echo $var5 . " is Small";
}
?>

<?php echo "<br>";
echo "<br>";
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}
?>

<?php echo "<br>";
echo "<br>";
$x = true;
$y = false;
var_dump($x and $y);
?>