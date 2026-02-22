<!-- Write a PHP script to demonstrate class and object. -->
<?php
echo "<h2>Demonstrating Class and Object in PHP</h2>";
class Car {
    public $make;
    public $model;
    public $year;

    function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    function displayInfo() {
        echo "Car: " . $this->make . " " . $this->model . " (" . $this->year . ")<br>";
    }
}
$car1 = new Car("Toyota", "Camry", 2020);
$car2 = new Car("Honda", "Civic", 2019);
$car1->displayInfo();
$car2->displayInfo();
?>