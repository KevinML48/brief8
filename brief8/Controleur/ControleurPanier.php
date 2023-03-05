<?php

require_once 'Modele/Article.php';
require_once 'Vue/Vue.php';

class ControleurPanier {

  private $panier;

  public function __construct() {
    $this->panier = new Panier();
  }

  // Affiche la liste de tous les articles du blog
  public function accueil() {
    $panier = $this->panier->getPanier();
    //var_dump($articles);
    $vue = new Vue("Panier");
    $vue->generer(array('Panier' => $panier));
  }

}