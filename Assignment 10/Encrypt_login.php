<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f7f8;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            padding: 20px 0;
        }

        .container {
            width: 400px;
            margin: 30px auto;
            background: white;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .btn {
            background: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        .btn:hover {
            background: rgb(0, 0, 0);
        }
    </style>

</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 login-container">
                <h2 class="text-center mb-4">Encryption Login</h2>
                <form method="post" action="Encrypt_login.php">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="e1" type="text" class="form-control" id="email" placeholder="  email" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="p1" type="password" class="form-control" id="password" placeholder="Password"
                            required>
                    </div>

                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                <p class="mt-3 text-center text-muted">Don't have an account? <a href="Registration.php">Register
                        here</a></p>
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

        $qur = "SELECT * FROM `projectcustomer` WHERE username = '$username'";

        $exc = mysqli_query($con, $qur);
        $rowcnt = mysqli_num_rows($exc);
        if ($rowcnt == 1) {
            //verify password
            $rowInfo=mysqli_fetch_assoc($exc);
            $encrypted_password=$rowInfo['password'];

            if(password_verify($password,$encrypted_password)){
            session_start();
            $rows = mysqli_fetch_assoc($exc);
            $_SESSION['username'] =$username;
            echo "<script> 
                    alert('Successful login'); 
                    window.location.href='customer_dash.php';
                  </script>";
            }else{
                echo"
                <script>
                alert('Username is correct but invalid password');
                </script>
                ";

            }
           
        } else {
            echo " Invalid Username or Password";
        }
    }
}
?>
