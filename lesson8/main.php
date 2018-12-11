<?php

include_once "Dog.php";
include_once "Cat.php";

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

var_dump($cat);













