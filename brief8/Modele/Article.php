<?php

require_once 'Modele/Modele.php';

class Article extends Modele {

  // Renvoie la liste des billets du blog
  public function getArticles() {
    $sql = ('select code_article as id,nom as titre,image as img,prix as prix, description as contenu from article;');
    $articles = $this->executerRequete($sql);
    return $articles;
  }

  // Renvoie les informations sur un billet
  public function getArticle($idArticle) {
    $sql = ('select code_article as id, nom as titre, description as contenu from article where code_article=?;'); // on a definit code_article en id c'est pour sa que dans where on le met avec code_article
    $article = $this->executerRequete($sql, array($idArticle));
    if ($article->rowCount() == 1)
      return $article->fetch();  // Accès à la première ligne de résultat
    else
      throw new Exception("Aucun article ne correspond à l'identifiant '$idArticle'");
    }
}