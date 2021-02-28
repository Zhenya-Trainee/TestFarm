<?php
namespace app\Animals;

use farm\Animal;

class Cow extends Animal
{
    function __construct() {
        //Unique number cow
        $this->idAnimal = parent::$id++;
    }

    //Еhe amount of milk from one cow
    public function getProduct(){
        return rand(8, 12);
    }
}