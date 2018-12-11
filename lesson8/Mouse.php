<?php
/**
 * Created by PhpStorm.
 * User: dasha
 * Date: 11.12.2018
 * Time: 19:33
 */

require_once "Pet.php";
class Mouse extends Pet
{
    private $speed;

    public function __construct($pet_name, $pet_age)
    {
        parent::__construct($pet_name, $pet_age);
    }


    public function getSpeed()
    {
        return $this->speed;
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }


}