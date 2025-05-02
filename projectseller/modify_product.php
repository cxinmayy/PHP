<?php
require "dbconnect.php";

// Fetch product details when Product ID is provided
$product = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['fetch'])) {
    $pid = $_POST['proid'];

    $result = mysqli_query($con, "SELECT * FROM `productinfo` WHERE proid='$pid'");


    if ($result && mysqli_num_rows($result) > 0) {
        $product = mysqli_fetch_assoc($result);
    } else {
        echo "<script>alert('Product Not Found!');</script>";
    }
}

// Update product details
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    $pid = $_POST['proid'];
    $pname = $_POST['proname'];
    $pdesc = $_POST['prodes'];
    $pqty = $_POST['proqty'];

    $updateQuery = "UPDATE `productinfo` SET 
                    proname='$pname', 
                    prodes='$pdesc', 
                    proqty=proqty+'$pqty' 
                    WHERE proid='$pid'";

    if (mysqli_query($con, $updateQuery)) {
        echo "<script>alert('Product Updated Successfully!'); window.location.href='seller_dash.php';</script>";
    } else {
        echo "<script>alert('Update Failed!');</script>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> -->
    <title>Update Product</title>
</head>

<body>
    <div class="container mt-4">
        <h2>Modify Product Details</h2>

        <!-- Form to enter Product ID to fetch details -->
        <!-- <form method="post">
            <div class="form-group">
                <label>Enter Product ID</label>
                <input type="text" name="proid" class="form-control" required>
            </div>
            <button type="submit" name="fetch" class="btn btn-info">Fetch Product</button>
        </form> -->


        <!-- With drop-down -->
        <form method="post">
            <div class="form-group">
                <label>Select Product ID</label>

                <select name="proid" class="form-control" required>
                    <option value="">Select Product ID</option>
                    <?php
                    require "dbconnect.php";
                    $productIds = mysqli_query($con, "SELECT proid FROM productinfo");
                    while ($row = mysqli_fetch_assoc($productIds)) {
                        echo "<option value='{$row['proid']}'>{$row['proid']}</option>";
                    }
                    ?>
                </select>

            </div>
            <button type="submit" name="fetch" class="btn btn-info">Fetch Product</button>
            <a href="seller_login.php"class="btn btn-info" >Logout</a>
        </form>

        <?php if ($product): ?>
            <!-- Form to update product details -->
            <form method="post" class="mt-4">
                <input type="hidden" name="proid" value="<?= $product['proid']; ?>">
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" name="proname" class="form-control" value="<?= $product['proname']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Product Description</label>
                    <input type="text" name="prodes" class="form-control" value="<?= $product['prodes']; ?>" required>
                </div>
                <div class="form-group">
                    <label>Product Quantity</label>
                    <input type="number" name="proqty" class="form-control" value="<?= $product['proqty']; ?>" required>
                </div>
                <button type="submit" name="update" class="btn btn-primary">Update Product</button>
                
            </form>
        <?php endif; ?>
    </div>

</body>

</html>