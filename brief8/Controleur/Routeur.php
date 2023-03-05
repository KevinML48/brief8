
<?php

require_once 'Controleur/ControleurAccueil.php';
require_once 'Controleur/ControleurArticle.php';
require_once 'Controleur/ControleurPanier.php';
require_once 'Vue/Vue.php';

class Routeur {

  private $ctrlAccueil;
  private $ctrlArticle;
  private $ctrlPanier;

  public function __construct() {
    $this->ctrlAccueil = new ControleurAccueil();
    $this->ctrlArticle = new ControleurArticle();
    $this->ctrlPanier = new ControleurPanier();
  }

  // Traite une requête entrante
  public function routerRequete() {
    try {
      if (isset($_GET['action'])) {
        if ($_GET['action'] == 'article') {
          if (isset($_GET['id'])) {
            $idArticle = intval($_GET['id']);
            if ($idArticle != 0) {
              $this->ctrlArticle->article($idArticle);
            }
            else
              throw new Exception("Identifiant de l'article non valide");
          }
          else
            throw new Exception("Identifiant de l'article non défini");
        }
/*         else if ($_GET['action'] == 'panier'){

        } */
        else
          throw new Exception("Action non valide");
      }
      else {  // aucune action définie : affichage de l'accueil
        $this->ctrlAccueil->accueil();
      }
    }
    catch (Exception $e) {
      $this->erreur($e->getMessage());
    }
  }

  // Affiche une erreur
  private function erreur($msgErreur) {
    $vue = new Vue("Erreur");
    $vue->generer(array('msgErreur' => $msgErreur));
  }
}