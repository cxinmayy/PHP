<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }
        .dashboard {
            /* background-color: #f4f4f4;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1); */
        }
        .logout-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 20px;
        }

    </style>
</head>
<body>
    <div class="dashboard">
        <h2>Dashboard page</h2>
        
        <p>Logged in as: <?php echo ($_SESSION['username']); ?></p>
        
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>
</body>
</html>