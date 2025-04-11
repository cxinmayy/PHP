<?php
session_start();

if (!isset($_SESSION['user_email'])) {
    echo "<script>
            alert('Please login first.');
            window.location.href='loginseller.php';
          </script>";
    exit();
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>All Products</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">All Products</h2>
        <nav class="navbar navbar-light bg-light">
  <span class="navbar-text">
    Logged in as: <?php echo $_SESSION['user_email']; ?>
  </span>
  <a href="logoutuser.php" class="btn btn-outline-danger">Logout</a>
</nav>
        <table class="table table-striped table-bordered">
           
                <tr>
                    <th>Product ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Quantity</th>
                </tr>
          
           
                <?php
                require "dbconnect.php";

                $sql = "SELECT * FROM productinfo";
                $result = mysqli_query($con, $sql);

                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                            <td>{$row['proid']}</td>
                            <td>{$row['proname']}</td>
                            <td>{$row['prodes']}</td>
                            <td>{$row['proqty']}</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4' class='text-center'>No products found</td></tr>";
                }
                ?>
            
        </table>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
