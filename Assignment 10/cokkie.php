<?php
$cookie_name = "Game";
$cookie_value = "I_am_cokkie";
setcookie($cookie_name, $cookie_value, time() + 5, "/"); 
echo "I am Cookie";
?>