<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Products</title>
   
</head>

<body>
    <div class="container">
        <h2>All Products</h2>

        <table border=1>
            <tr>
                <th>Product ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Quantity</th>
            </tr>

            <?php
            require "DBcon.php";

            $sql = "SELECT * FROM proinfo";
            $result = mysqli_query($con, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                        <td>{$row['ProID']}</td>
                        <td>{$row['ProTitle']}</td>
                        <td>{$row['ProDes']}</td>
                        <td>{$row['Proqty']}</td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='4' class='no-data'>No products found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>
