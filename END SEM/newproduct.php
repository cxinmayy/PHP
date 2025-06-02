<?php
require "DBcon.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['e1'], $_POST['n1'], $_POST['f1'], $_POST['p1'])) {
        $ue = $_POST['e1'];
        $un = $_POST['n1'];
        $uf = $_POST['f1'];
        $up = $_POST['p1'];

        $qur = "INSERT INTO `proinfo` VALUES ('$ue','$un','$uf','$up')";
        $exc = mysqli_query($con, $qur);
        if ($exc) {
            echo "<script>alert('Product Added Successfully.'); window.location.href='productcard.php';</script>";
        } else {
            echo "<script>alert('Product Insertion Failed!');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product</title>
</head>
<body>

    <h2>Add Product</h2>

    <form method="post" action="newproduct.php">
        <label>Product ID:</label><br>
        <input type="text" name="e1" required><br><br>

        <label>Product Name:</label><br>
        <input type="text" name="n1" required><br><br>

        <label>Product Description:</label><br>
        <input type="text" name="f1" required><br><br>

        <label>Product Quantity:</label><br>
        <input type="number" name="p1" required><br><br>

        <input type="submit" value="Submit">
    </form>

</body>
</html>
