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







