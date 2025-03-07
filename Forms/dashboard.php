<?php

echo "<h1> welcome to dashboard page</h1>";
session_start();
echo "HI" . $_SESSION['uname']. "<br>Please verify details:
    <br>father name=". $_SESSION['ufather']."
    <br>DOB = ".$_SESSION['udob'];


?>