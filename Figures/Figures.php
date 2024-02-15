<?php
//auteur Van der Wiel

include_once 'Rectangle.php';
include_once 'Square.php';
include_once 'Circle.php';
include_once 'Triangle.php';
class Figures
{
    public array $shapeList;

    public function __construct()
    {
        $this->shapeList = [
            new Rectangle(60, 120, 'Lightblue'),
            new Rectangle(60, 120, 'Blue'),
            new Rectangle(60, 120, 'Green'),
            new Square(50, 50, 'Lightblue'),
            new Square(50, 50, 'Blue'),
            new Square(50, 50, 'Green'),
            new Circle(75, 75, 'Lightblue'),
            new Circle(75, 75, 'Blue'),
            new Circle(75, 75, 'Green'),
            new Triangle(90, 90, 'Lightblue'),
            new Triangle(90, 90, 'Blue'),
            new Triangle(90, 90, 'Green'),
        ];
    }
}

abstract class ScreenShape
{
    protected int $width;
    protected int $height;
    protected string $color;

    public function getColor(): string
    {
        return $this->color;
    }

    abstract public function draw(): string;
}

// Example usage:
$Figures = new Figures();
foreach ($Figures->shapeList as $shape) {
    echo $shape->draw() . PHP_EOL;
}

