<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student Login</title>


</head>

<body>

    <div>
        <div>
            <div>
                <h2>Seller Login</h2>
                <form method="post" action="login.php">
                    <div>
                        <label for="email">Email</label>
                        <input name="e1" type="text" id="email" placeholder="  email" required>
                    </div>

                    <div>
                        <label for="password">Password</label>
                        <input name="p1" type="password" id="password" placeholder="Password" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                
            </div>
        </div>
    </div>


  
</body>

</html>


<?php
require "DBcon.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['e1'], $_POST['p1'])) {
        $username = $_POST['e1'];
        $password = $_POST['p1'];

        $sql = "SELECT * FROM `sellerlogin` WHERE email = '$username' AND password = '$password'";
        $result = mysqli_query($con, $sql);
        $rowcount = mysqli_num_rows($result);
        if ($rowcount == 1) {
            session_start();
            $_SESSION['username'] = $username;
            setcookie("show_password", $password, time() + 21, "http://localhost/2341041025%20chinmay/Assignment10/dash.php");

            echo "<script> 
                    alert('Successful login'); 
                    window.location.href='dash.php';
                  </script>";
        } else {
            echo " Invalid Email or Password";
        }
    }
}
?>
