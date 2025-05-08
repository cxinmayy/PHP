<!doctype html>
<html lang="en">

<head>


    <title>Hello, world!</title>
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
    <h1>Encryption Registration</h1>
    <div class="container">
        <form method="post" action="Encrypt_reg.php">
            <div class="form-group">
                <label>Email</label>
                <input name="e1" type="text">

            </div>
            <div class="form-group">
                <label>password</label>
                <input name="n1" type="text">

            </div>

            <button type="submit" class="btn btn-primary"><b>Submit</b></button>
        </form>
    </div>



</body>

</html>

<?php
require "dbconnect.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (
        isset(
        $_POST['e1'],
        $_POST['n1']
    )
    ) {
        $ue = $_POST['e1'];
        $un = $_POST['n1'];

        
        //before insertion we need encryption
        $encrypted_un= password_hash($up,PASSWORD_DEFAULT);


        $qur = "insert into `projectcustomer` values 
            ('$ue','$encrypted_un')";
        $exc = mysqli_query($con, $qur);
        if ($rowcount == 1) {
            session_start();
            $_SESSION['reg_no'] = $ue;

            echo "<script> 
                    alert('Successful login'); 
                    window.location.href='Encrypt_login.php';
                  </script>";
        } else {
            echo " Invalid Email or Password";
        }
        if ($exc) {
            echo "
                    <script>
                        alert('Reg Successful.');
                        window.location.href='Encrypt_login.php';
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
?>