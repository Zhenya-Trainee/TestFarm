<?php
namespace farm;

abstract class Animal
{
        //Key number
    static $id = 1;

        //Animal number
    public $idAnimal = 0;

        //The amount of food from the animal
    protected abstract function getProduct();

}