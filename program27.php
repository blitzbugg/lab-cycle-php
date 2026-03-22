<!-- Develop a PHP program to update a particular value in the table. -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $sql = "UPDATE users SET username='$username', email='$email' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully!";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Values</title>
</head>
<body>
    <h2>Update Values in Users Table</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        ID: <input type="text" name="id" required><br><br>
        Username: <input type="text" name="username" required><br><br>
        Email: <input type="text" name="email" required><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>