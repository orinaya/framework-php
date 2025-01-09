<?php


/**
 * Etape 1 : Point d'entrée de l'application
 * Frontal Controller + Kernel
 */

require 'vendor/autoload.php';

use \Ori\MVC\Router;

/**pour tester
 * dump($_SERVER);
 */

// Etape 2 : Définir un gestionnaire d'exception

set_exception_handler(function (Throwable $e) {
    // Fails gracefully
    http_response_code(500);
    echo "Oups.";
});
// Etape
// Connaître dla demande, ressource demandée : URL + Méthoed HTTP

// Etape 3 : Invoquer router

$router = new Router();




/**Si un controleur est associé à cette endpoint
 *  - Passer le traitement de la requête au controller adéquat;
 *  - Retourner une page 404 sinon
 */


try {

    //getController lève une exception si aucun controller n'est trouvé
    $controller = $router->getController();

    //Fabriquer la réponse
    $response = $controller->execute();

    // Arrête l'exécution du programme (pas oublier de l'enlever)
    // die;
    // die;
    //Retourner la réponse au client
    http_response_code(200);
    echo $response;
} catch (Exception $e) {
    // Aucune ressource exposée àcette URL, retourner une réponse 404
    http_response_code(404);

    //Messgae

    echo $e->getMessage();  // echo "404 : La ressource demandée n'existe pas";
}

