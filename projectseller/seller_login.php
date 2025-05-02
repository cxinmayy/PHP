<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student Login</title>


</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 login-container">
                <h2 class="text-center mb-4">Seller Login</h2>
                <form method="post" action="seller_login.php">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="e1" type="text" class="form-control" id="email" placeholder="  email" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="p1" type="password" class="form-control" id="password" placeholder="Password" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                <p class="mt-3 text-center text-muted">Don't have an account? <a href="Registration.php">Register here</a></p>
            </div>
        </div>
    </div>


  
</body>

</html>


<?php
require "dbconnect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['e1'], $_POST['p1'])) {
        $username = $_POST['e1'];
        $password = $_POST['p1'];

        $sql = "SELECT * FROM `projectseller` WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($con, $sql);
        $rowcount = mysqli_num_rows($result);
        if ($rowcount == 1) {
            session_start();
            $_SESSION['username'] = $username;

            echo "<script> 
                    alert('Successful login'); 
                    window.location.href='seller_dash.php';
                  </script>";
        } else {
            echo " Invalid Email or Password";
        }
    }
}
?>

