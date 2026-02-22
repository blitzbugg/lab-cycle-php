<!-- Write a PHP script to demonstrate interface. -->
<?php
echo "<h2>Demonstrating Interface in PHP</h2>";
interface Shape {
    public function area();
}
class Circle implements Shape {
    private $radius;
    public function __construct($radius) {
        $this->radius = $radius;
    }
    public function area() {
        return pi() * pow($this->radius, 2);
    }
}
class Rectangle implements Shape {
    private $width;
    private $height;
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    public function area() {
        return $this->width * $this->height;
    }
}
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);
echo "Area of Circle: " . $circle->area() . "<br>";
echo "Area of Rectangle: " . $rectangle->area() . "<br>";
?>