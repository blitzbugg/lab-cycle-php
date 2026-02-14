<!-- Write a PHP script to check whether the given number is odd or even.
 -->
<?php
echo "<h1>Check Odd or Even Number</h1>";
$number = 10; 
if ($number % 2 == 0) {
    echo $number . " is an even number.";
} else {
    echo $number . " is an odd number.";
}
?>