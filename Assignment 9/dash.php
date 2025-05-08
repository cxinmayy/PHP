<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo "<script>
            alert('Please login first.');
            window.location.href='seller_reg.php';
          </script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Choose Registration Type</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            gap: 40px;
        }

        .box {
            background-color: #ffffff;
            border: 2px solid #007bff;
            border-radius: 10px;
            padding: 30px 50px;
            width: 200px;
            text-align: center;
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .box:hover {
            background-color: #007bff;
            color: white;
            transform: scale(1.05);
        }

        .box-title {
            font-size: 18px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div
        style="background-color: #eee; padding: 10px 20px; display: flex; justify-content: space-between; align-items: center; font-family: sans-serif;">
        <div>Logged in as: <strong><?php echo $_SESSION['username']; ?></strong></div>
        <a href="customer_login.php" style="color: red; text-decoration: none; font-weight: bold;">Logout</a>
    </div>


    <div class="container">

        <a href="add_product.php" class="box">
            <div class="box-title">Add product</div>
        </a>
        <a href="modify_product.php" class="box">
            <div class="box-title">Modify product</div>
        </a>

        <div> <strong>
            <?php if (isset($_COOKIE['show_password'])) {
             echo "Your password: " . $_COOKIE['show_password'];
            } ?></strong>
        </div>



</body>

</html>
<!-- <?php
require "dbconnect.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (
        isset(
        $_POST['e1'],
        $_POST['n1'],
        $_POST['f1'],
        $_POST['p1']
    )
    ) {
        $ue = $_POST['e1'];
        $un = $_POST['n1'];
        $uf = $_POST['f1'];
        $up = $_POST['p1'];

        $qur = "insert into `productinfo` values 
            ('$ue','$un','$uf','$up')";
        $exc = mysqli_query($con, $qur);
        if ($exc) {
            echo "
                    <script>
                        alert('Reg Successful.');
                        // window.location.href='modify.php';
                    </script>
                ";
        } else {
            echo "
                    <script>
                        alert('Reg Not Successful!!!');
                    </script>
                ";
        }
    }
}
?> -->