<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="getreq2.php" method="get">
        <a href="getreq2.php?class=BCA&cnt=50">
            click here
        </a>
    </form>
</body>

</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['class'], $_GET['cnt'])) {
        $c1 = $_GET['class'];
        $ct1 = $_GET['cnt'];

        echo "
        <script>
        alert('The class is = $c1  and the students = $ct1');
        </script>
        ";
    }
}

?>