<?php

echo "<h1>Factorial program </h1>";
function factorial($n) {
    if ($n == 0) {
        return 1;
    }
    else {
        return $n * factorial($n - 1);
    }
}


$number = 5;
echo "<h2> Factorial of $number is " . factorial($number)."</h2>"; 
?>
