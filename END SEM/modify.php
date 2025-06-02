<?php
require "DBcon.php";

// Fetch product details when Product ID is provided
$product = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['fetch'])) {
    $pid = $_POST['ProID'];

    $result = mysqli_query($con, "SELECT * FROM `proinfo` WHERE ProID='$pid'");


    if ($result && mysqli_num_rows($result) > 0) {
        $product = mysqli_fetch_assoc($result);
    } else {
        echo "<script>alert('Product Not Found!');</script>";
    }
}

// Update product details
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    $pid = $_POST['ProID'];
    $pname = $_POST['ProTitle'];
    $pdesc = $_POST['ProDes'];
    $pqty = $_POST['Proqty'];

    $updateQuery = "UPDATE `proinfo` SET 
                    ProID='$pid', 
                    ProDes='$pdesc', 
                    Proqty=Proqty+'$pqty' 
                    WHERE ProID='$pid'";

    if (mysqli_query($con, $updateQuery)) {
        echo "<script>alert('Product Updated Successfully!'); window.location.href='modify.php';</script>";
    } else {
        echo "<script>alert('Update Failed!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Product</title>

</head>
<body>

<div class="container">
    <h2>Update Product Details</h2>

    <!-- Product dropdown form -->
    <form method="post">
        <div class="form-group">
            <label>Select Product ID</label>
            <select name="ProID" required>
                <option value="">Select Product ID</option>
                <?php
                $productIds = mysqli_query($con, "SELECT ProID FROM proinfo");
                while ($row = mysqli_fetch_assoc($productIds)) {
                    echo "<option value='{$row['ProID']}'>{$row['ProID']}</option>";
                }
                ?>
            </select>
        </div>
        <button type="submit" name="fetch">Fetch Product</button>
    </form>

    <?php if ($product): ?>
        <!-- Update product form -->
        <form method="post" class="mt-4">
            <input type="hidden" name="ProID" value="<?= $product['ProID']; ?>">
            <div>
                <label>Product Name</label>
                <input type="text" name="ProName" value="<?= $product['ProTitle']; ?>" required>
            </div>
            <div>
                <label>Product Description</label>
                <input type="text" name="ProDes" value="<?= $product['ProDes']; ?>" required>
            </div>
            <div>
                <label>Product Quantity (Add)</label>
                <input type="number" name="Proqty" value="0" required>
            </div>
            <button type="submit" name="update">Update Product</button>
        </form>
    <?php endif; ?>
</div>

</body>
</html>