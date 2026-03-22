<!-- Develop a PHP program to view the records from the table. -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT id, username, email, reg_date FROM users";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Username</th><th>Email</th><th>Registration Date</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["username"] . "</td><td>" . $row["email"] . "</td><td>" . $row["reg_date"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
mysqli_close($conn);
?>