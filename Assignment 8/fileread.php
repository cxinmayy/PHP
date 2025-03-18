<?php

readfile('abc.txt');
echo '<br>';

/*
readfile() scanning/reading entire content from the text file and print the same without using echo keyword

for reading file content in systematic way the three major functions are given fopen(),fread(),fclose()
without fopen()we cant read or working with a specific file, it should have some specific operations such as 
"r"→ Read-only mode (file must exist)

"w" → Write mode (creates a new file or truncates existing one)
"a" → Append mode
"rb", "wb", "ab" → Binary mode variants

fread() is responsible reading the file content by its length

fclose() closes the open file and we cant work with that file after fclose() is executed 
*/


$f1= fopen('abc.txt','r');
// $r1 = fread($f1, filesize('abc.txt'));
$r1=fread($f1,20);
echo $r1;


//2.fgets()= fgets() is used to read a line from a file
echo '<br>';
echo"<br>by using fgets() with multiple variable";
rewind($f1);
$r2= fgets($f1);
echo "<br> $r2";

$r3= fgets($f1);
echo "<br> $r3";

$r4= fgets($f1);
echo "<br> $r4";
echo '<br>';

echo"<br>by using fgets() with while loop";
rewind($f1);
while($r2=fgets($f1)){
    echo "<br> $r2";
}


//3.fgetc()= function is used to read a single character from a file.
echo '<br>';
echo"<br>by using fgets() with multiple variable";
rewind($f1);
$r2= fgetc($f1);
echo "<br> $r2";

$r3= fgetc($f1);
echo "<br> $r3";

$r4= fgetc($f1);
echo "<br> $r4";
echo '<br>';


echo '<br>';
echo"<br>by using fgetc() with while loop";
rewind($f1);
$i=0;
while($r2=fgetc($f1)){
    echo "<br>$r2";
    $i++;
    if($i==20){
        break;
        }
        }


        

$f1 = fopen("abc.txt", "r");
if ($f1) {
    while (($char = fgetc($f1)) !== false) {
        if ($char == "\n") {
            echo "<br>";
        } else {
            echo $char;
        } 
    }
   
}
//4. fclose()=  function is used to close an open file in PHP
fclose($f1);
echo '<br>';
echo "<br>The File is Closed.";
$f1 = fopen('abc.txt', 'r');
echo "<br>The File is opened again.<br>";
while ($r5 = fgetc($f1)) {
    if ($r5 === "\n") {
        echo "<br>";
    }
    echo $r5;
    if ($r5 == "r") {
        break;
    }
}



?>