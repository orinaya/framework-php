<?php
namespace Ori\MVC\View;

use Ori\MVC\Model\Article;


class SingleArticle
{
    public function __construct(public readonly Article $article)
    {

    }

    public function getHtml(): string
    {
        return sprintf("<html><h1>%s</h1></html>", $this->article->title);
    }
}

