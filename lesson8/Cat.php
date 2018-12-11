<?php

include_once "Pet.php";

// дочерний класс
class Cat extends Pet
{
//    public $name = "Без имени";
//    public $age;

    public $color;

    // конструктор
    public function __construct($cat_name, $cat_age, $cat_color)
    {
        parent::__construct($cat_name, $cat_age);
        $this->color = $cat_color;
        $this->type = "Кошка";
    }

    // мотоды класса
    public function saySmth(){
        var_dump($this->name . " Мяу");
    }
}