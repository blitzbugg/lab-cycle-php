<?php
$marks = 75; // Input marks
$total_marks = 100;
$percentage = ($marks / $total_marks) * 100;

echo "<h2>Student Result</h2>";
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Marks Obtained</th><td>$marks/$total_marks</td></tr>";
echo "<tr><th>Percentage</th><td>$percentage%</td></tr>";

if ($percentage >= 60) {
    $grade = "First Division";
} elseif ($percentage >= 45 && $percentage <= 59) {
    $grade = "Second Division";
} elseif ($percentage >= 33 && $percentage <= 44) {
    $grade = "Third Division";
} else {
    $grade = "Fail";
}

echo "<tr><th>Grade</th><td>$grade</td></tr>";
echo "</table>";
?>