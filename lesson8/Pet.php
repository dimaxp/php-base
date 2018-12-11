<?php
// родительский класс
class Pet
{
    public $name = "Без имени";
    public $age;

    // конструктор
    public function __construct($pet_name, $pet_age)
    {
        $this->name = $pet_name;
        $this->age = $pet_age;
    }

    public function eat(Pet $food){
        var_dump($this->name . " скушал " . $food->name);
    }

}