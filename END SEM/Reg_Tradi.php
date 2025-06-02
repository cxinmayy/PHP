<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello, world!</title>
    <style>
        /* Minimal styling for layout */
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        form {
            max-width: 400px;
        }
        label {
            display: block;
            margin-top: 10px;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-top: 4px;
            box-sizing: border-box;
        }
        button {
            margin-top: 15px;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Hello, world!</h1>
    <form method="post" action="Reg_Tradi.php">
        

        <label for="name">User Name</label>
        <input name="n1" type="text" id="name">



        <label for="password">Password</label>
        <input name="p1" type="password" id="password">

        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
require "DBcon.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset( $_POST['n1'],  $_POST['p1'])) {
       
        $un = $_POST['n1'];
        
        $up = $_POST['p1'];

        $qur = "INSERT INTO `RegInfo` VALUES ('$un','$up')";
        $exc = mysqli_query($con, $qur);
        if ($exc) {
            echo "<script>alert('Reg Successful.'); window.location.href='login_tradi.php';</script>";
        } else {
            echo "<script>alert('Reg Not Successful!!!');</script>";
        }
    }
}
?>
