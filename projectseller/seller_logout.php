<?php
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to login page
header("Location: seller_login.php");
// echo "<script>alert('Successful login'); window.location.href='login.php';</script>";

exit();
?>