<?php 

session_start();

$_SESSION['panier'] = [];
if(isset($_GET['id'])){  
    die('Le produit a bien été supprimer <a href="javascript:history.back()">retourner sur le catalogue</a>'); // la commande mis dans le href permet de revenir un cran en arriere dans lhistorique de naviguation 
}else{
    die("Vos articles a bien était supprimer"); // message d'erreur 
}

header('location:gabarit.php');