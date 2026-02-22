<!-- Write a PHP script to demonstrate the inheritance. -->
<?php
echo "<h2>Demonstrating Inheritance in PHP</h2>";
class Animal {
    public function makeSound() {
        echo "Animal makes a sound <br>";
    }
}
class Dog extends Animal {
    public function makeSound() {
        echo "Dog barks <br>";
    }
}
class Cat extends Animal {
    public function makeSound() {
        echo "Cat meows <br>";
    }
}
$dog = new Dog();
$cat = new Cat();
$dog->makeSound();
$cat->makeSound();
?>
