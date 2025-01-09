<?php
/**
 * 
 * Summary of namespace MDS\ComposerAutoloading\Models
 */
namespace MDS\ComposerAutoloading\Models;

/**
 * Summary of City
 */
class City
{
    //portée (public, private, protected) 
    // on peut mettre directement dans le constructeur   
    public static string $longestName = "";


    /**
     * Summary of __construct
     * @param string $name
     * @param string $county
     */
    public function __construct(private string $name, private string $county)
    {
        // echo 'Constructeur appelé' . PHP_EOL;

        // vérifie que le nom est le plus long que celui connu actuellement.
        // Si oui alors le plus long.
        // Sinon c'est toujours l'ancien.
        if (strlen($name) > strlen(self::$longestName)) {
            self::$longestName = $name;
        }
    }


    /**
     * Summary of printLongestName
     * @return void
     */
    public static function printLongestName(): void
    {
        echo sprintf("La ville la plus longue est " . self::$longestName . "");
        // echo "{City::longestName}";
    }

    /**
     * Summary of __toString
     * @return string
     */
    public function __toString(): string
    {
        return "La ville {$this->name} est dans le département {$this->county}";
    }
}
