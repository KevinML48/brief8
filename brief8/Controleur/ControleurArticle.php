<?php

require_once 'Modele/Article.php';
require_once 'Vue/Vue.php';

class ControleurArticle {

  private $article;

  public function __construct() {
    $this->article = new Article();
  }

  // Affiche les détails sur un billet
  public function article($idArticle) {
    $article = $this->article->getArticle($idArticle);
    $vue = new Vue("Article");
    $vue->generer(array('article' => $article));
  }
}