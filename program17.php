<!--  Write a PHP program to create a registration form and demonstrate the server side validation process for name exclusively. -->
<?php
echo "<h2>Registration Form with Server-Side Validation for Name</h2>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $errors = [];
    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (empty($errors)) {
        echo "<h3>Registration Successful!</h3>";
        echo "Name: " . htmlspecialchars($name) . "<br>";
    } else {
        echo "<h3>Errors:</h3><ul>";
        foreach ($errors as $error) {
            echo "<li>" . htmlspecialchars($error) . "</li>";
        }
        echo "</ul>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name"><br><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>