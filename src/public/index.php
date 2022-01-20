<?php

class Figure
{
    protected string $type;

    public function getType(): string
    {
        return $this->type;
    }

    public function getPerimeter()
    {

    }

    public function getSquare()
    {

    }
}


class Circle extends Figure
{
    private int $radius;

    public function __construct($radius)
    {
        $this->type = 'круг';
        $this->radius = $radius;
    }


    public function getPerimeter(): float|int
    {
        // TODO: Implement perimeter() method.
        return 2 * M_PI * $this->radius;
    }

    public function getSquare(): float|int
    {
        // TODO: Implement square() method.
        return M_PI * ($this->radius ** 2);
    }
}

class Triangle extends Figure
{
    private int $sideA;
    private int $sideB;
    private int $sideC;

    public function __construct($sideA, $sideB, $sideC)
    {
        $this->type = 'треугольник';
        $this->sideA = $sideA;
        $this->sideB = $sideB;
        $this->sideC = $sideC;
    }

    public function getPerimeter()
    {
        // TODO: Implement perimeter() method.
        return $this->sideA + $this->sideB + $this->sideC;
    }

    public function getSquare(): float|int
    {
        // TODO: Implement square() method.
        $polP = ($this->sideA + $this->sideB + $this->sideC) / 2;
        return sqrt($polP * ($polP - $this->sideA) * ($polP - $this->sideB) * ($polP - $this->sideC));
    }
}

class Square extends Figure
{
    private int $side;

    public function __construct($side)
    {
        $this->type = 'квадрат';
        $this->side = $side;
    }

    public function getPerimeter(): float|int
    {
        // TODO: Implement perimeter() method.
        return $this->side * 4;
    }

    public function getSquare(): float|int
    {
        // TODO: Implement getSquare() method.
        return $this->side ** 2;
    }
}


$square = new Square(50);
echo "Фигура: " . $square->getType() . ", " . "площадь: " . $square->getSquare() . ", " . "периметр: " . $square->getPerimeter() . ".",  "<br>";

$triangle = new Triangle(10, 20, 15);
echo "Фигура: " . $triangle->getType() . ", " . "площадь: " . round($triangle->getSquare()) . ", " . "периметр: " . round($triangle->getPerimeter()) . ".", "<br>";

$circle = new Circle(50);
echo "Фигура: " . $circle->getType() . ", " . "площадь: " . round($circle->getSquare()) . ", " . "периметр: " . round($circle->getPerimeter()) . ".", "<br>";
