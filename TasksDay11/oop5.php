<?php
abstract class Shape {
    abstract public function draw();
}
class Circle extends Shape {
    public function draw() {
        echo "Drawing a Circle";
    }
}
class Rectangle extends Shape {
    public function draw() {
        echo "Drawing a Rectangle";
    }
}
$circle = new Circle();
$circle->draw(); 
$rectangle = new Rectangle();
$rectangle->draw(); 
?>