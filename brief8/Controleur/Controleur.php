<?php

require 'Modele/Modele.php';

// Affiche la liste de tous les billets du blog
function accueil() {
  $articles = getArticles();
  require 'Vue/vueAccueil.php';
}

// Affiche les détails sur un billet
function article($idArticle) {
  $article = getArticle($idArticle);
  require 'Vue/vueArticle.php';
}

// affiche le panier
function panier($idPanier) {
  $panier = getPanier($idPanier);
  require 'Vue/vuePanier.php';
}

// Affiche une erreur
function erreur($msgErreur) {
  require 'Vue/vueErreur.php';
}