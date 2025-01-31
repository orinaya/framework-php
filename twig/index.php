<?php

require_once 'vendor/autoload.php';

// Premiere étape : Initialisation, Configuration
$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'debug' => true,
    // ...
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());
$twig = new \Twig\Environment($loader, []);

// Deuxième étape : Récupération du template
$template = $twig->load('index.html.twig');

// On crée un tableau de 0 à 100
$numbers = range(0, 100);

// On crée une instance de la classe User
class User
{
    public function __construct(public string $fullName)
    {

    }
}
// Troisième étape : Rendu
echo $template->render([
    // On passe des variables à notre template
    'message' => 'Hello Caca !',
    // On passe un tableau
    'numbers' => $numbers,
    'user' => new User('jean biche')
]);