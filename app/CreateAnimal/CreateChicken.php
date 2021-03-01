<?php

namespace app\CreateAnimal;

use app\Animals\Chicken;


class CreateChicken
{
    private $countChicken;

    public function __construct($countChicken)
    {
        $this->countChicken = $countChicken;
    }

    protected function createChicken(): Chicken
    {
        return new Chicken();
    }

    protected function additionChicken()
    {
        //Create a barn
        $chicken = array();
        //Launching the cow
        for($i = 1; $i <= $this->countChicken; $i++){
            $chicken[]=$this->createChicken();
        }
        return $chicken;
    }

    protected function harvesting($chicken)
    {
        // Clean the basket
        $egg = 0;
        // Collect products
        foreach ($chicken as $value)
        {
            $egg += $value->getProduct();
        }
        return $egg;
    }

    public function getHarvest()
    {
        $basket = $this->additionChicken();
        $basket = $this->harvesting($basket);
        echo "Собрано $basket штук яиц </br>";
    }
}