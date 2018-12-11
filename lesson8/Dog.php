<?php
// объявление класса
// дочерний класс
require_once "Pet.php";
class Dog extends Pet
{
    // описание класса
    // свойства класса
//    public $name = "Без имени"; // свойство созначением
//    по умолчанию (изначально будет одинаковым для всех
//    объектов)
//    public $age;

    // конструктор
    public function __construct($dog_name, $dog_age)
    {
//        $this->name = $dog_name;
//        $this->age = $dog_age;
        parent::__construct($dog_name, $dog_age);
    }

    // мотоды класса
    public function saySmth(){
        var_dump("Гав");
    }
}