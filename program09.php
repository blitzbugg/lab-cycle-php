<?php

echo "<h1>Leap Year program </h1>";
function leapyear($year) {
    if ($year%4 == 0 || $year%400 == 0) {
        echo "The year $year is a leap year <br>";
    }
    else{
        echo "The year $year is not a leap year <br>";
    }
}

leapyear(2000);
leapyear(2003);

?>