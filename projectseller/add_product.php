<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
<!-- <nav class="navbar navbar-light bg-light">
  <span class="navbar-text">
    Logged in as: <?php echo $_SESSION['username']; ?>
  </span><br>
  <a href="login.php" class="btn btn-outline-danger">Logout</a>
</nav> -->

<h1 style="text-align: center;">New Product Registration</h1>
<form method="post" action="seller_dash.php">
        <div class="form-group">
            <label for="exampleInput">Product ID</label>
            <input name="e1" type="text" class="form-control" id="exampleInput" aria-describedby="emailHelp">

        </div>
        <div class="form-group">
            <label for="exampleInput">Product Name</label>
            <input name="n1" type="text" class="form-control" id="exampleInput" aria-describedby="emailHelp">

        </div>
        <div class="form-group">
            <label for="exampleInput">Product Description</label>
            <input name="f1" type="text" class="form-control" id="exampleInput" aria-describedby="emailHelp">

        <div class="form-group">
            <label for="exampleInputQnty">Product Quantity</label>
            <input name="p1" type="number" class="form-control" id="exampleInputQnty">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>
</html>
<?php
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
?>