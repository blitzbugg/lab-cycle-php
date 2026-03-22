<!-- Write a PHP program to create a registration form and demonstrate the server side validation process for email and URL exclusively. -->
<?php
echo "<h2>Registration Form with Server-Side Validation for Email and URL</h2";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);
    $url = trim($_POST["url"]);

    $errors = [];

    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($url)) {
        $errors[] = "URL is required.";
    } elseif (!filter_var($url, FILTER_VALIDATE_URL)) {
        $errors[] = "Invalid URL format.";
    }

    if (empty($errors)) {
        echo "<br><h3>Registration Successful!</h3>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "URL: " . htmlspecialchars($url) . "<br>";
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
        Email: <input type="text" name="email"><br><br>
        URL: <input type="text" name="url"><br><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>