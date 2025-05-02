<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Choose Registration Type</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            gap: 40px;
        }

        .box {
            background-color: #ffffff;
            border: 2px solid #007bff;
            border-radius: 10px;
            padding: 30px 50px;
            width: 200px;
            text-align: center;
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .box:hover {
            background-color: #007bff;
            color: white;
            transform: scale(1.05);
        }

        .box-title {
            font-size: 18px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <a href="seller_reg.php" class="box">
            <div class="box-title">Seller Registration</div>
        </a>
        <a href="customer_reg.php" class="box">
            <div class="box-title">Customer Registration</div>
        </a>
    </div>

</body>
</html>
