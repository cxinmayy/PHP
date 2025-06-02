<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <style>
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
    <h1>Login Page</h1>
    <form method="post" action="login_tradi.php">
        <label for="email">Email address</label>
        <input name="e1" type="text" id="email" required>

        <label for="password">Password</label>
        <input name="p1" type="password" id="password" required>

        <button type="submit">Submit</button>
    </form>
</body>

<?php
require "DBcon.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['e1'], $_POST['p1'])) {
        $usEm = $_POST['e1'];
        $usPas = $_POST['p1'];

        $qur = "SELECT * FROM `RegInfo` WHERE `UserName` = '$usEm' AND `Pass` = '$usPas'";
        $exc = mysqli_query($con, $qur);

        if (mysqli_num_rows($exc) == 1) {
            echo "<script>alert('Login Successful'); window.location.href='dashboard.php';</script>";
        } else {
            echo "<script>alert('Invalid Credentials');</script>";
        }
    }
}
?>

</html>
