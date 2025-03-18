<?php

$f2= fopen('mnp.txt', 'w');
fwrite($f2, "okay its our 18th class !\n");
fwrite($f2, "Good Enough\n");

echo "content changed sucessfully";
fclose($f2);
echo"file writing mode is closed";

$f3= fopen('mnp.txt', 'a');
fwrite($f3, "okay its our 18th class !\n");
fwrite($f3, "Good Enough\n");

echo "content apended sucessfully";
fclose($f3);
?>