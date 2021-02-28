<?php
use app\Harvesting;

require_once __DIR__ . '/vendor/autoload.php';


$result = new Harvesting();
$result = $result->harvesting($result->additionAnimals(10,20));

echo "<p>Вы собрали ". $result['milk'] . " литров молока</p>";
echo "<p>Вы собрали ". $result['egg'] . " яиц</p>";


