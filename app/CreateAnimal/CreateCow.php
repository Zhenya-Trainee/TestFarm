<?php

namespace app\CreateAnimal;
use app\Animals\Cow;

class CreateCow
{
    private $countCow;

    public function __construct($countCow)
    {
        $this->countCow = $countCow;
    }
    protected function createCow(): Cow
    {
        return new Cow;
    }

    protected function additionCow()
    {
        //Create a barn
        $cow = array();
        //Launching the cow
        for($i=1; $i<=$this->countCow; $i++){
            $cow[]=$this->createCow();
        }
        return $cow;
    }


    protected function harvesting($cow)
    {
        // Clean the basket
        $milk = 0;
        // Collect products
        foreach ($cow as $value)
        {
            $milk += $value->getProduct();
        }
        return $milk;
    }

    public function getHarvest()
    {
        $basket = $this->additionCow();
        $basket = $this->harvesting($basket);
        echo "Собрано $basket литров молока </br>";
    }

}