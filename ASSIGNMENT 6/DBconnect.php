<?php
$server_name = 'localhost';
$user_name = 'root';
$user_password = '5555';
$database_name = 'bcar1';

$con = mysqli_connect($server_name, $user_name, $user_password, $database_name);


$query1 = "CREATE TABLE IF NOT EXISTS  `Tata` 
(`empid` VARCHAR(50) PRIMARY KEY, `ename` VARCHAR(50), `eage` INT(2));";


$execution = mysqli_query($con, $query1);
if ($execution) {
    echo "table created";
} else {
    echo "table not created";
}


$query2 = "INSERT INTO `Tata` (`empid`, `ename`, `eage`) 
VALUES
('E002', 'Amit', 30),
('E003', 'Priya', 28),
('E004', 'Neha', 26),
('E005', 'Vikram', 35),
('EOO6', 'Rahul', 25);";


$execution1 = mysqli_query($con, $query2);
if ($execution1) {
    echo "<br>Inserted sucessfully";
} else {
    echo "Not inserted";
}
?>