<!-- Write a PHP program to demonstrate access specifiers. -->
<?php
echo "<h2>Demonstrating Access Specifiers in PHP</h2>";
class MyClass {
    public $publicVar = "This is a public variable.";
    protected $protectedVar = "This is a protected variable.";
    private $privateVar = "This is a private variable.";
    public function showVars() {
        echo $this->publicVar . "<br>";
        echo $this->protectedVar . "<br>";
        echo $this->privateVar . "<br>";
    }
}
$obj = new MyClass();
echo $obj->publicVar . "<br>"; // Accessible
echo $obj->protectedVar . "<br>"; // Not accessible, will cause an error
echo $obj->privateVar . "<br>"; // Not accessible, will cause an error
$obj->showVars(); // Accessing all variables through a public method
?>