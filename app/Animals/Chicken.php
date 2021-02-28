<?php

namespace app\Animals;

use farm\Animal;

class Chicken extends Animal
{
    function __construct() {
        // Unique number chicken
        $this->idAnimal = parent::$id++;
    }
    //Number of eggs from one chicken
    public function getProduct(){
        return rand(0,1);
    }

}