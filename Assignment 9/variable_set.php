<?php

session_start();

$a1="email@gmail.com";
$b1="password";

$_SESSION['username']=$a1;
$_SESSION['password']=$b1;
echo"session started !";


?>