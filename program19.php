<!-- Write a PHP program to display the timestamp information of the last visit of a page using cookies. -->
<?php
$cookie_name = "last_visit";

if (isset($_COOKIE[$cookie_name])) {
    $last = $_COOKIE[$cookie_name];
    $message = "Last visit: " . date("d M Y  H:i:s", $last);
} else {
    $message = "First visit";
}

setcookie($cookie_name, time(), time() + 86400 * 30, "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Last Visit</title>
</head>
<body>

<h2><?= $message ?></h2>

<p>Current time: <?= date("d M Y  H:i:s") ?></p>

</body>
</html>