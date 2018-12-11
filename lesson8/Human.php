<?php

class Human
{
    private $pet;
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getPetName()
    {
        return $this->pet->name;
    }

    public function setPet(Pet $pet)
    {
        $this->pet = $pet;
    }


    public function getName()
    {
        return $this->name;
    }

}