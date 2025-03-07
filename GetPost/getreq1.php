<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="method="get">
    <a href="getreq.php?userID=abc123&userPass=34597">
     click here
    </a>
    </form>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=='GET'){
    if(isset($_GET['userID'],$_GET['usrePass'])){
        $uN=$_GET['userID'];
        $uP=$_GET['userPass'];

        echo "
             <script>
             alert('UserName=$uN and UserPassword=$uP is fetched')
             </script>
        ";
    }
}
?>

