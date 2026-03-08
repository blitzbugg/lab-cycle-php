<!-- Write a PHP program to show the use of file handling functions. -->
<?php
echo "<h2>Demonstrating File Handling in PHP</h2>";
$file = fopen("example.txt", "w") or die("Unable to open file!");
$txt = "Hello, this is a sample text file.\n";
fwrite($file, $txt);
$txt = "This file is created using PHP file handling functions.\n";
fwrite($file, $txt);
fclose($file);
$file = fopen("example.txt", "r") or die("Unable to open file!");
echo "<h3>Contents of the file:</h3>";
while(!feof($file)) {
    echo fgets($file) . "<br>";
}
fclose($file);
?>
