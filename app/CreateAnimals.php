<?php

namespace app;

use app\Animals\{Chicken,Cow};

class CreateAnimals
{
    // Making a chicken
    public function createChicken(): Chicken
    {
        return new Chicken;
    }
    // Making a cow
    public function createCow(): Cow
    {
        return new Cow;
    }

}
