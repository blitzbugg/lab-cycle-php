<!-- Write a program to display the page count using session. -->
<?php
session_start();

if (!isset($_SESSION['page_count'])) {
    $_SESSION['page_count'] = 0;
}

$_SESSION['page_count']++;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page Count</title>
</head>
<body>

<h2>Page Count: <?= $_SESSION['page_count'] ?></h2>

</body>
</html>
