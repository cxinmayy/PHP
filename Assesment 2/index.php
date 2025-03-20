<?php
$server_NAME = 'localhost';
$user_name = 'root';
$user_password = '5555';
$dbName = 'bcar1';

// Create a connection
$con = mysqli_connect($server_NAME, $user_name, $user_password, $dbName);

// Check the connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Fetch product details from the database
$qur = "SELECT * FROM `proinfo` WHERE `ProID`='Pro_1'";
$qurr = "SELECT * FROM `proinfo` WHERE `ProID`='Pro_2'";
$qurrr = "SELECT * FROM `proinfo` WHERE `ProID`='Pro_3'";
$exc = mysqli_query($con, $qur);
$excc = mysqli_query($con, $qurr);
$exccc = mysqli_query($con, $qurrr);
$detPro = mysqli_fetch_assoc($exc);
$detProo = mysqli_fetch_assoc($excc);
$detProoo = mysqli_fetch_assoc($exccc);

// Check if the query was successful
if (!$exc || !$excc || !$exccc) {
    die("Query failed: " . $con->error); // This will show any SQL errors
}

?>

<!doctype html>
<html lang="en">
<style>
  .carousel-item img {
    object-fit: cover; /* Ensures the image fills the container */
    height: 500px; /* Set a fixed height */
  }
</style>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Product Details</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Amazon.in</a>
    
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <!-- Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    All
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Home</a>
                    <a class="dropdown-item" href="#">Category</a>
                    <a class="dropdown-item" href="#">Contact</a>
                </div>
            </li>
        </ul>

        <div class="d-flex align-items-center ml-auto">
            <!-- Search Form -->
            <form class="form-inline d-flex">
                <input class="form-control mr-2" type="search" name="query" placeholder="Search..." required>
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>

            <!-- Login & Sign Up Buttons -->
            <a class="btn btn-success ml-2" href="#">Login</a>
            <a class="btn btn-primary ml-2" href="#">Sign Up</a>
        </div>
    </div>


</nav>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="xiaomi.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Oneplus.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="oneplus13.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


    <!-- Product Details Section -->
    <div class="container mt-5">
        <h1>Product Details</h1>

        <div class="row">
            <!-- First Card -->
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $detPro['ProImg'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $detPro['ProTitle'] ?></h5>
                        <p class="card-text"><?= $detPro['ProDes'] ?></p>
                        <a href="#" class="btn btn-primary">View Product</a>
                    </div>
                </div>
            </div>

            <!-- Second Card -->
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $detProo['ProImg'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $detProo['ProTitle'] ?></h5>
                        <p class="card-text"><?= $detProo['ProDes'] ?></p>
                        <a href="#" class="btn btn-primary">View Product</a>
                    </div>
                </div>
            </div>

            <!-- Third card -->
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $detProoo['ProImg'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $detProoo['ProTitle'] ?></h5>
                        <p class="card-text"><?= $detProoo['ProDes'] ?></p>
                        <a href="#" class="btn btn-primary">View Product</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>

</body>

</html>

<?php

$con->close();
?>
