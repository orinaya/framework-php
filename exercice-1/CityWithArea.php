<?php

//éviter de créer 2 namespaces dans un fichier
namespace Models;
require_once __DIR__ . "/City.php";

class CityWithArea extends City
{

    function __construct(
        string $name,
        string $county,
        private string $area
    ) {

        parent::__construct($name, $county);
        // echo 'Constructeur appelé Coucou' . PHP_EOL;
    }


    function __toString(): string
    {
        return parent::__toString() . " de la région {$this->area}.";
    }

}
