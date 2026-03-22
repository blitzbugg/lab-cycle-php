<!-- Develop a PHP program to create table. -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
if (mysqli_query($conn, $sql)) {
    echo "Table users created successfully!";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
mysqli_close($conn);
?>