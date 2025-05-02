<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo "<script>
            alert('Please login first.');
            window.location.href='customer_login.php';
          </script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <span class="navbar-text">
    Logged in as: <?php echo $_SESSION['username']; ?>
  </span><br>
  <a href="customer_login.php" class="btn btn-outline-danger">Logout</a>
</nav>

<h1 style="text-align: center;">Welcome to customer portal</h1>
<div>
    <a href="buy_product.php">Buy product</a>
</div>
<div>
<a href="myorders.php">my orders</a>
</div>
</body>
</html>
<!-- <?php
require "dbconnect.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset(
        $_POST['e1'],
        $_POST['n1'],
        $_POST['f1'],
        $_POST['p1']
    )) {
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