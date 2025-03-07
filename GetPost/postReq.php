<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- LogIn Page -->
    <form action="postReq.php" method="post">
        <label>Email:</label>
        <input type="email" name="e1">
        <label>Password:</label>
        <input type="password" name="p1">
        <input type="submit" value="Login">
    </form>
</body>

</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['e1']) and isset($_POST['p1'])) {
        $eml = $_POST['e1'];
        $pass = $_POST['p1'];
        if ($eml != NULL and $pass != NULL) {
            echo "
            <script>
                alert('The Email is $eml and Password is $pass');
            </script>
            ";
        } else {
            echo "
                <script>
                    alert('Please Fill the boxes!!');
                </script>
            ";
        }
    }
}
?>