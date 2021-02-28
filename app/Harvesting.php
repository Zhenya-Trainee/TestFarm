<?php

namespace app;

use app\Animals\{Chicken,Cow};


class Harvesting
{
    public function additionAnimals($countCow,$countChicken)
    {
        $factory = new CreateAnimals();
            //Create a barn
        $a = array();
            //Launching the cow
        for($i=1; $i<=$countCow; $i++){
            $a[]=$factory->createCow();
        }
            //Launching the chickens
        for($i=1; $i<=$countChicken; $i++){
            $a[]=$factory->createChicken();
        }
        return $a;

    }

    public function harvesting($a)
    {
        // Clean the basket
        $milk = 0;
        $egg = 0;
        // Collect products
        foreach ($a as $value)
        {
            if ($value instanceof Cow){
                $milk += $value->getProduct();
            } elseif ($value instanceof Chicken){
                $egg += $value->getProduct();
            }
        }
        $harvest = array('milk'=>$milk,'egg'=>$egg);
        return $harvest;
    }

}
