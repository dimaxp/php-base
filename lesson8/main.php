<?php


include_once "Dog.php";
include_once "Cat.php";
include_once "Mouse.php";

// создание объекта
$puppy = new Dog("Шарик", 2);
var_dump($puppy);
echo $puppy->name; // получение значения свойства name
// для объекта $puppy
$puppy->age = 3; // установка значения свойства age
// для объекта $puppy
$puppy->name = "Ричи";

$puppy->saySmth(); // вызов метода

var_dump($puppy);


//$puppy2 = new Dog("Пиф", 3);
//var_dump($puppy2);

$cat = new Cat("Степа", 4, "серый");
//$cat->eat("Мышь");
$cat->saySmth();

$puppy->eat($cat);
//$cat->type; модификатор доступа - protected
var_dump($cat);


$mouse = new Mouse("Mouse", 1);
//$mouse->speed; //  приват доступ поля speed
// доступ к приват полю через геттеры и сеттеры
$mouse->setSpeed(10);
var_dump($mouse->getSpeed());

// доступ к константе вне класса
var_dump(Cat::PET_CONST);

require_once "Singleton.php";
//конструктор с модификатором private
// создать объект нельзя
//$sing = new Singleton();

$obj = AppConfig::getInstance();

$obj2 = AppConfig::getInstance();
$obj->setFile("config.txt");
$obj->writeConfig("db.pwd", "123");
$login = $obj->readConfig("db.username");

require_once "Human.php";

$human = new Human("Василий");
$human->setPet($puppy);

var_dump($human->getPetName());
var_dump($human);


/*класс Operation:
поля а b
метод execute() - без реализации */

abstract class Operation{
    protected $a;
    protected $b;

    function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    abstract function execute();
}

/*класс Plus наследник Operation
переопределить метод execute() написать реализацию */
class Plus extends Operation {
    function __construct($a, $b)
    {
        parent::__construct($a, $b);
    }

    public function execute()
    {
        return $this->a + $this->b;
    }
}

/*класс Minus наследник Operation
переопределить метод execute() написать реализацию*/
class Minus extends Operation {
    function __construct($a, $b)
    {
        parent::__construct($a, $b);
    }

    public function execute()
    {
        return $this->a - $this->b;
    }
}
class Division extends Operation{
    public function div(){
        return $this->a/$this->b;
    }

    function execute()
    {
        return $this->a/$this->b;
    }
}
/*класс Calculator
статический метод getInstance($a, $b, $operation) {}
возвращает экземпляр объекта Plus или Minus
в зависимости от переданной операции*/

class Calculator {
    // паттерн фабричный метод
    public static function getInstance($a, $b, $operation) {
        if ($operation == "+") {
            return new Plus($a, $b);
        }
        return new Minus($a, $b);
    }
}

/*Получить через форму:
значение a, значение b, операцию

$operation = // создание объекта*/
$post = $_POST;
$a = 1;//$post['a'];
$b = 3; //$post['b'];
$op = "/"; //$post['operation'];
$operation = Calculator::getInstance($a, $b, $op);
$operation->execute();

//написать программу для считывания
//конфиг файлов xml и txt



