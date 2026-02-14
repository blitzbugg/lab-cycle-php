<!-- Write a PHP program to show string functions.. -->
<?php
echo "<h1>String Functions in PHP</h1>";
$string = "Hello, World!";
echo "Original String: " . $string . "<br>";
// String Length
echo "Length of String: " . strlen($string) . "<br>";
// String to Uppercase
echo "Uppercase String: " . strtoupper($string) . "<br>";
// String to Lowercase
echo "Lowercase String: " . strtolower($string) . "<br>";
// String Replace
echo "String Replace 'World' with 'PHP': " . str_replace("World", "PHP", $string) . "<br>";
// String Substring
echo "Substring (0, 5): " . substr($string, 0, 5) . "<br>";
// String Position
echo "Position of 'World': " . strpos($string, "World") . "<br>";
// String Trim
$stringWithSpaces = "   Hello, World!   ";
echo "Trimmed String: '" . trim($stringWithSpaces) . "'<br>";
// String lcfirst
echo "Lowercase First Character: " . lcfirst($string) . "<br>";
// String ucfirst
echo "Uppercase First Character: " . ucfirst(strtolower($string)) . "<br>";
?>
