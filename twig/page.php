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
$template = $twig->load('page.html.twig');

echo $template->render();