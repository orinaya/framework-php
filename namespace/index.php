<?php
require_once './City.php';

//je déclare \Models\City comme City
//attention ça n'importe pas le code
use \Models\City;

$city = new City("Foo", "Bar");


// namespace Bar;
// class Foo
// {
//     public function doSomething()
//     {
//         $exception = throw new \Exception();
//     }
// }