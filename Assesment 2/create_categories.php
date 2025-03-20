<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "5555"; 
$dbname = "bcar1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to create table
$sql = "CREATE TABLE IF NOT EXISTS categories (
    catID INT AUTO_INCREMENT PRIMARY KEY,
    catTitle VARCHAR(100) NOT NULL,
    catDes TEXT NOT NULL,
    catImg VARCHAR(255) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'categories' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
    exit;
}

// SQL to insert data
$sql = "INSERT INTO categories (catTitle, catDes, catImg) VALUES 
('PHP', 'Discuss PHP related topics, frameworks, and best practices', 'php.jpg'),
('MySQL', 'Questions about database design, queries, and optimization', 'mysql.jpg'),
('Bootstrap', 'Get help with Bootstrap components and responsive design', 'bootstrap.jpg'),
('JavaScript', 'JavaScript programming, libraries, and frameworks', 'javascript.jpg')";

if ($conn->query($sql) === TRUE) {
    echo "Sample categories added successfully<br>";
} else {
    echo "Error adding sample data: " . $conn->error . "<br>";
}

echo "<br>You can now go back to <a href='index.php'>index.php</a>";

$conn->close();
?>