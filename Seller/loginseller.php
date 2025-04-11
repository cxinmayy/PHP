<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Seller Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        body {
            background-color: #f7f7f7;
        }

        .login-container {
            margin-top: 100px;
            padding: 30px;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 login-container">
                <h2 class="text-center mb-4">Seller Login</h2>
                <form method="post" action="loginseller.php">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input name="e1" type="email" class="form-control" id="email" placeholder="Enter email" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="p1" type="password" class="form-control" id="password" placeholder="Password" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                <p class="mt-3 text-center text-muted">Don't have an account? <a href="#">Register here</a></p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
</body>

</html>


<?php
require "dbconnect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['e1'], $_POST['p1'])) {
        $email = $_POST['e1'];
        $password = $_POST['p1'];

        $sql = "SELECT * FROM `sellerlogin` WHERE email = '$email' AND pass = '$password'";
        $result = mysqli_query($con, $sql);
        $rowcount = mysqli_num_rows($result);
        if ($rowcount == 1) {
            session_start();
            $_SESSION['seller_email'] = $email;

            echo "<script> 
                    alert('Successful login'); 
                    window.location.href='newproduct.php';
                  </script>";
        } else {
            echo " Invalid Email or Password";
        }
    }
}
?>

