<?php

namespace Ori\MVC\Controller;

use Ori\MVC\Model\Article;
use Ori\MVC\View\SingleArticle;
/**
 * Controlleur en charge 
 */
class ArticleController
{

    public function __construct(
        public readonly array $args
    ) {
    }

    public function execute()
    {
        //Trouver un article avec le titre passé dans la requête
        //Ecrire réponse pour le client (afficher le contenu de l'article)

        //Partie métier: retourner un article avec le titre demandé

        $title = $this->args['title'];
        $article = Article::create($title);

        //Préparer la présentation du résultat de l'opération métier
        $view = new SingleArticle($article);
        //La vue a la charge de préparer la réponse pour le client (mise en forme des résultats délivrés par le modèle/partie métier de l'application)
        return $view->getHtml();
    }
}




