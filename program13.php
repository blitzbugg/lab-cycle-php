<!--  Write a PHP script to implement constructor and destructor. -->
<?php
echo "<h2>Demonstrating Constructor and Destructor in PHP</h2>";
class Person {
    public $name;

    function __construct($name) {
        $this->name = $name;
        echo "Constructor called for $name <br>";
    }

    function __destruct() {
        echo "Destructor called for $this->name <br>";
    }
}
$person1 = new Person("Alice");
$person2 = new Person("Bob");
?>
