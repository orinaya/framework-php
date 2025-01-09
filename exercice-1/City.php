<?php
namespace Models;
class City
{
    //portée (public, private, protected)
// on peut mettre directement dans le constructeur

    public static string $longestName = "";
    function __construct(
        private string $name,
        private string $county
    ) {
        // echo 'Constructeur appelé' . PHP_EOL;

        // vérifie que le nom est le plus long que celui connu actuellement. Si oui alors le plus long. Sinon c'est toujours l'ancien.
        if (strlen($name) > strlen(self::$longestName)) {
            self::$longestName = $name;
        }


    }

    public static function printLongestName(): void
    {
        echo sprintf("La ville la plus longue est " . self::$longestName . "");
        // echo "{City::longestName}";
    }

    function __toString(): string
    {
        return "La ville {$this->name} est dans le département {$this->county}";
    }
}

