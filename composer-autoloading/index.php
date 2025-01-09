<?php

require_once __DIR__ . '/vendor/autoload.php';

use MDS\ComposerAutoloading\Models\City;
use MDS\ComposerAutoloading\Models\CityWithArea;

// Exercice 1

$array = [1, 2, 3, 'foo', [1, 2, 3]];
var_dump($array);
dump($array);

//Instancier à partir d'une classe
$nantes = new CityWithArea("Nantes", "Loire-Atlantique", "Pays de la Loire");
$lille = new CityWithArea("Lille", "Nord", "Hauts-de-France");
$salaunes = new CityWithArea("Salaunes", "Gironde", "Nouvelle-Aquitaine");
$kaysersberg = new CityWithArea("Kaysersberg", "Haut-Rhin", "Alsace");
$angers = new CityWithArea("Angers", "Loire-Atlantique", "Pays de la Loire");




echo $nantes . PHP_EOL;
echo $lille . PHP_EOL;

// echo $nantesWithArea . PHP_EOL;


City::printLongestName();