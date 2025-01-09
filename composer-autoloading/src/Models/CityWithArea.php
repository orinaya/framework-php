<?php
/**
 * Summary of namespace MDS\ComposerAutoloading\Models
 */
namespace MDS\ComposerAutoloading\Models;
//éviter de créer 2 namespaces dans un fichier

use MDS\ComposerAutoloading\Models\City;

/**
 * Summary of CityWithArea
 */
class CityWithArea extends City
{
    /**
     * Summary of __construct
     * @param string $name
     * @param string $county
     * @param string $area
     */
    public function __construct(
        string $name,
        string $county,
        private string $area
    ) {

        parent::__construct($name, $county);
        // echo 'Constructeur appelé Coucou' . PHP_EOL;
    }


    public function __toString(): string
    {
        return parent::__toString() . " de la région {$this->area}.";
    }
}
