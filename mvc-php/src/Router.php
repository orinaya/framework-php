<?php

namespace Ori\MVC;

use Exception;
use Ori\MVC\Controller\ArticleController;
/**
 * Le router de l'appli, associe un controller à chaque endpopint
 * et d'invoquer le controller
 */
class Router
{
    // déclarer association entre endpoint et controller
// on range les ressources par méthode http
    public const ROUTES = [
        'GET' => [
            '/articles' => 'Ori\\MVC\\Controller\\ArticleController'
        ]
    ];

    /**
     * Retourne la classe du contrôleur associée à la requête
     * @throws Exception Si aucun contrôleur n'est trouvé
     */
    public function getController()
    {

        // Récupère la méthode http et l'URL demandé
        // dump($_SERVER);

        // Découper l'URI en plusieurs parties (path, query)
        $parts = parse_url($_SERVER['REQUEST_URI']);

        //Découper la query part
        parse_str($parts['query'], $args);

        //Vérifier que l'endpoint existe dans les ROUTES déclarées par l'application
        $resource = $parts['path'];
        $httpMethod = $_SERVER['REQUEST_METHOD'];

        $isRoute = isset(self::ROUTES[$httpMethod][$resource]);

        if (!$isRoute) {
            throw new Exception("La ressource demandée n'existe pas");
        }

        $controllerName = self::ROUTES[$httpMethod][$resource];
        if (!class_exists($controllerName))
            throw new Exception("Le controleur n'existe pas");

        $controller = new $controllerName($args);

        return $controller;
    }

    public function __construct()
    {

    }

}