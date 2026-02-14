<!-- Write a php program to find maximum of three numbers. -->
<?php
echo "<h1>Find Maximum of Three Numbers</h1>";
$num1 = 10;
$num2 = 20;
$num3 = 15;
$max = $num1;
if ($num2 > $max) {
    $max = $num2;
}
if ($num3 > $max) {
    $max = $num3; 
}
echo "The maximum of $num1, $num2, and $num3 is: " . $max;
?>