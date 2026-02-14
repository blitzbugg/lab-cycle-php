<!-- Write a program to show day of the week using switch/case statements.-->
<?php
echo "<h1>Day of the Week</h1>";
$day = date("D");

switch ($day) {
    case "Sun":
        echo "It's Sunday";
        break;
    case "Mon":
        echo "It's Monday";
        break;
    case "Tue":
        echo "It's Tuesday";
        break;
    case "Wed":
        echo "It's Wednesday";
        break;
    case "Thu":
        echo "It's Thursday";
        break;
    case "Fri":
        echo "It's Friday";
        break;
    case "Sat":
        echo "It's Saturday";
        break;
    default:
        echo "Invalid day of the week.";
}
?>