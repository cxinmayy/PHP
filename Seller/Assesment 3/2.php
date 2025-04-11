<?php

$students = ["chinmay", "roy", "mayank", "ABC", "XYZ"];

$file = fopen("student.txt", "w");

foreach ($students as $name) {
    fwrite($file, $name . "\n");
}

$read = file("student.txt");

$read = array_reverse($read);
foreach ($read as $line) {
    echo $line;
}
?>
