<?php

use app\Farm;
use app\CreateAnimal\{CreateChicken,CreateCow};


require_once __DIR__ . '/vendor/autoload.php';

$cow = new CreateCow(10);
$cow->getHarvest();
$chicken = new CreateChicken(20);
$chicken->getHarvest();


