<?php
// родительский класс
// модификаторы доступа
//public - доступны везде
//protected - доступны внутри класса
//private - доступны только на уровне класса


class Pet
{
    // константы класса
    // начиная с версии php 7.1.0
    // можно задать модификаторы доступа для констант
    const PET_CONST = "PET"; // объявление константы

    public $name = "Без имени";
    public $age;

//    private $type;
    protected $type;

    // конструктор
    public function __construct($pet_name, $pet_age)
    {
        $this->name = $pet_name;
        $this->age = $pet_age;
    }

    public function eat(Pet $food){
        // доступ к константе
        var_dump(self::PET_CONST);
        var_dump($this->name . " скушал " . $food->name);
    }
}