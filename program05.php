<?php
$num1 = 0;
$num2 = 1;
$count = 10; // Change this to display more or less terms

echo "<h1>Fibonacci Series</h1>";

echo "Fibonacci Series up to $count terms: ";
for ($i = 0; $i < $count; $i++) {
    echo $num1 . " ";
    $num3 = $num1 + $num2;
    $num1 = $num2;
    $num2 = $num3;
}
?>
