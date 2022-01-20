<?php
//namespace work;
//include("blog/Page.php");
//include("news/Page.php");
//
//use \blog\Page as News;
//use \news\Page as Blog;
//
//$blog = new Blog();
//$news = new News();
//
//$blog->load();
//echo "<br>";
//$news->load();


//abstract class User
//{
//    protected $name;
//
//    abstract public function showRole();
//
//    public function __construct()
//    {
//        $name = $this->name;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    /**
//     * @param mixed $name
//     */
//    public function setName(mixed $name): void
//    {
//        $this->name = $name;
//    }
//}
//
//class Admin extends User
//{
//    public function showRole()
//    {
//        echo 'admin';
//    }
//}
//
//class Visitor extends User
//{
//    public function showRole()
//    {
//        echo 'Visitor';
//    }
//}
//
//$admin = new Admin();
//$admin->setName('Vasya');
//$admin->showRole();
//
//
//$visitor = new Visitor();
//$visitor->setName('Pete');
//$visitor->showRole();
//
//
//interface Countas
//{
//    public function result();
//}
//
//class Sum implements Countas
//{
//    private int $one;
//    private int $two;
//
//    public function __construct(int $one, int $two)
//    {
//        $this->one = $one;
//        $this->two = $two;
//    }
//
//    public function result()
//    {
//        echo($this->one + $this->two);
//    }
//}
//
//
//class Mult implements Countas
//{
//    private int $one;
//    private int $two;
//
//    public function __construct(int $one, int $two)
//    {
//        $this->one = $one;
//        $this->two = $two;
//    }
//
//    public function result()
//    {
//        echo($this->one * $this->two);
//    }
//}
//
//echo "<br>";
//$sum = new Sum(1, 2);
//$mult = new Mult(2,3);
//$sum->result();
//echo "<br>";
//$mult->result();
//
//


interface ArrayCrudInterface {
    public function create();
    public function read($index);
    public function update();
    public function delete($index);

}


class ArrayCrud implements ArrayCrudInterface {
    protected array $arr = [];

    public function create()
    {
        // TODO: Implement create() method.
        for ($i=0; $i<=9; $i++) {
            $this->arr[$i] = random_int(0,100);
        }
    }

    public function update()
    {
        // TODO: Implement update() method.
        $this->arr[] = random_int(0, 100);
    }

    public function read($index)
    {
        // TODO: Implement read() method.
        return $this->arr[$index];
    }

    public function delete($index)
    {
        // TODO: Implement delete() method.
        unset($this->arr[$index]);
    }
}

$ku = new ArrayCrud();
$ku->create();
$ku->update();
print_r($ku);





//class Calc {
//    protected $param1;
//    protected $param2;
//
//    public function __construct($param1, $param2)
//    {
//        $this->param1 = $param1;
//        $this->param2 = $param2;
//    }
//
//    public function add(){
//        return $this->param1 + $this->param2;
//    }
//
//    public function subtract(){
//        return $this->param1 - $this->param2;
//    }
//
//    public function multiply (){
//        return $this->param1 * $this->param2;
//    }
//
//    public function divide () {
//        return $this->param1 / $this->param2;
//    }
//}
//
//class CalcTwo extends Calc {
//    public function pow ()
//    {
//        return $this->multiply()**2;
//    }
//}
//
//$calc = new Calc(3,4);
//echo "<p>3 + 4 = ".$calc->add(). "</p>";
//
//$calc = new Calc (15,12);
//echo "<p>15 - 12 = ".$calc->subtract(). "</p>";
//
//$calc = new Calc (20,2);
//echo "<p> 20 * 2 = ".$calc->multiply(). "</p>";
//
//$calc = new Calc (20,2);
//echo "<p> 20 / 2 = ".$calc ->divide(). "</p>";
//
//$pow = new CalcTwo(20, 2);
//echo $pow->pow()."<br>";
//
////Создать класс Calc, который принимает два параметра с числами Через конструктор инициализировать параметры класса
////(число 1 и число 2) создать методы, которые вычисляют основные математические операции (+ - / *),
////по очереди вызвать их на странице
//
////Сделайте класс Worker, в котором будут следующие public поля - name (имя), age (возраст), salary (зарплата).
////Создайте объект этого класса, установите поля в следующие значения - имя 'Иван', возраст 25, зарплата 1000.
////Создайте второй объект этого класса,
////установите поля в следующие значения - имя 'Вася', возраст 26, зарплата 2000. Выведите на экран сумму зарплат Ивана и Васи. Выв
//
//class Worker {
//    public $name;
//    public $age;
//    public $salary;
//
//    //	SETERS
//    public function setName($name) {
//        $this->name = $name;
//    }
//
//    public function setAge($age) {
//        $this->age = $age;
//    }
//
//    public function setSalary($salary) {
//        $this->salary = $salary;
//    }
//
//    //	GETERS
//    public function getName() {
//        return $this->name;
//    }
//
//    public function getAge() {
//        return $this->age;
//    }
//
//    public function getSalary() {
//        return $this->salary;
//    }
//}
//
//$workerIvan = new Worker();
//$workerIvan->setName('Иван');
//$workerIvan->setAge(25);
//$workerIvan->setSalary(1000);
//
//$workerVasya = new Worker();
//$workerVasya->setName('Вася');
//$workerVasya->setAge(26);
//$workerVasya->setSalary(2000);
//
//$sumSalary = $workerIvan->getSalary() + $workerVasya->getSalary();
//$sumAge = $workerIvan->getAge() + $workerVasya->getAge();
//
//echo "Сумма зарплат: $sumSalary<br>";
//echo "Сумма возрастов: $sumAge<br>";
//class Figure
//{
//    protected string $type;
//
//    public function getType(): string
//    {
//        return $this->type;
//    }
//
//    public function getPerimeter()
//    {
//
//    }
//
//    public function getSquare()
//    {
//
//    }
//}
//
//
//class Circle extends Figure
//{
//    private int $radius;
//
//    public function __construct($radius)
//    {
//        $this->type = 'круг';
//        $this->radius = $radius;
//    }
//
//
//    public function getPerimeter(): float|int
//    {
//        // TODO: Implement perimeter() method.
//        return 2 * M_PI * $this->radius;
//    }
//
//    public function getSquare(): float|int
//    {
//        // TODO: Implement square() method.
//        return M_PI * ($this->radius ** 2);
//    }
//}
//
//class Triangle extends Figure
//{
//    private int $sideA;
//    private int $sideB;
//    private int $sideC;
//
//    public function __construct($sideA, $sideB, $sideC)
//    {
//        $this->type = 'треугольник';
//        $this->sideA = $sideA;
//        $this->sideB = $sideB;
//        $this->sideC = $sideC;
//    }
//
//    public function getPerimeter()
//    {
//        // TODO: Implement perimeter() method.
//        return $this->sideA + $this->sideB + $this->sideC;
//    }
//
//    public function getSquare(): float|int
//    {
//        // TODO: Implement square() method.
//        $polP = ($this->sideA + $this->sideB + $this->sideC) / 2;
//        return sqrt($polP * ($polP - $this->sideA) * ($polP - $this->sideB) * ($polP - $this->sideC));
//    }
//}
//
//class Square extends Figure
//{
//    private int $side;
//
//    public function __construct($side)
//    {
//        $this->type = 'квадрат';
//        $this->side = $side;
//    }
//
//    public function getPerimeter(): float|int
//    {
//        // TODO: Implement perimeter() method.
//        return $this->side * 4;
//    }
//
//    public function getSquare(): float|int
//    {
//        // TODO: Implement getSquare() method.
//        return $this->side ** 2;
//    }
//}
//
//
//$square = new Square(50);
//echo "Фигура: " . $square->getType() . ", " . "площадь: " . $square->getSquare() . ", " . "периметр: " . $square->getPerimeter() . ".",  "<br>";
//
//$triangle = new Triangle(10, 20, 15);
//echo "Фигура: " . $triangle->getType() . ", " . "площадь: " . round($triangle->getSquare()) . ", " . "периметр: " . round($triangle->getPerimeter()) . ".", "<br>";
//
//
//$circle = new Circle(50);
//echo "Фигура: " . $circle->getType() . ", " . "площадь: " . round($circle->getSquare()) . ", " . "периметр: " . round($circle->getPerimeter()) . ".", "<br>";
//
//
