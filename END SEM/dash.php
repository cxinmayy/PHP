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
    
</head>

<body>
    <div
        style="background-color: #eee; padding: 10px 20px; display: flex; justify-content: space-between; align-items: center; font-family: sans-serif;">
        <div>Logged in as: <strong><?php echo $_SESSION['username']; ?></strong></div>
        <a href="login.php" style="color: red; text-decoration: none; font-weight: bold;">Logout</a>
    </div>

        <div> <strong>
            <?php if (isset($_COOKIE['show_password'])) {
             echo "Your password: " . $_COOKIE['show_password'];
            } ?></strong>
        </div>



</body>

</html>
<!-- <?php
require "DBcon.php";
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

        $qur = "insert into `proinfo` values 
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