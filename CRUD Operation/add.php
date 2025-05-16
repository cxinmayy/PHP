<?php
include 'db.php';

$title = $_POST['title'];
$desc = $_POST['desc'];

$sql = "INSERT INTO ActivityList (ActTitle, ActDesc) VALUES ('$title', '$desc')";
$conn->query($sql);

header("Location: index.php");
?>