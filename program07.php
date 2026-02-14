<!-- . Write a program to create an associative array and sort in ascending and descending order w.r.t key & values. -->
<?php

$fruits = array(
    "apple" => 3,
    "banana" => 1,
    "orange" => 2,
    "grape" => 4
);
echo "<h2>Original Associative Array</h2>";

print_r($fruits);

// Sort in ascending order w.r.t keys
ksort($fruits);
echo "<h2>Associative Array Sorted in Ascending Order (by keys)</h2>";

print_r($fruits);

// Sort in descending order w.r.t keys
krsort($fruits);
echo "<h2>Associative Array Sorted in Descending Order (by keys)</h2>";

print_r($fruits);

// Sort in ascending order w.r.t values
asort($fruits);
echo "<h2>Associative Array Sorted in Ascending Order (by values)</h2>";

print_r($fruits);

// Sort in descending order w.r.t values
arsort($fruits);
echo "<h2>Associative Array Sorted in Descending Order (by values)</h2>";

print_r($fruits);

?>