
<?php
require "dbconnect.php";

$quantity = "";


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["fetch"])) {
    $productName = isset($_POST["proname"]) ? $_POST["proname"] : "";
    $query = "SELECT proqty FROM productinfo WHERE proname = '$productName'";
    $result = mysqli_query($con, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $quantity = $row["proqty"];
    }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    $productName = $_POST['proname'];
    $pqty = $_POST['proqty'];

    $updateQuery = "UPDATE productinfo SET proqty = proqty - '$pqty' WHERE proname = '$productName'";

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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Update Product Details</h2>

        <form method="post">
            <div class="form-group">
                <label>Select Product</label>
                <select name="proname" required>
                    <option value="">Select Product</option>
                    <?php
                    $result = mysqli_query($con, "SELECT proname FROM productinfo");
                    while ($row = mysqli_fetch_assoc($result)) {
                        $selected = (isset($_POST["proname"]) && $_POST["proname"] == $row["proname"]) ? "selected" : "";
                        echo "<option value='{$row['proname']}' $selected>{$row['proname']}</option>";
                    }
                    ?>
                </select>
            </div>
            <button type="submit" name="fetch">Fetch Product</button>
        </form>

        <div>
            <label>Available Quantity</label>
            <input type="text" value="<?= $quantity; ?>" disabled>
        </div>


        <form method="post">
            <input type="hidden" name="proname" value="<?= $_POST['proname'] ?? ''; ?>">
            <div>
                <label>Buy Qty</label>
                <input type="number" name="proqty" placeholder="Enter quantity" required>
            </div>
            <button type="submit" name="update">Buy Product</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
