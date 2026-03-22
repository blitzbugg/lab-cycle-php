<!-- Develop a PHP program to delete a particular value in the table. -->
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
    $sql = "DELETE FROM users WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully!";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Values</title>
</head>
<body>
    <h2>Delete Values from Users Table</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        ID: <input type="text" name="id" required><br><br>
        <input type="submit" value="Delete">
    </form>
</body>
</html>