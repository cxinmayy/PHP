<?php
include 'db.php';
$id = $_GET['id'];
$conn->query("DELETE FROM activitylist WHERE ActID=$id");
header("Location: index.php");
?>