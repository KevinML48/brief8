<?php 

session_start();
$id = $_GET['id'];
$quantité = $_GET['quantité'];
$_SESSION['panier'][$id] = $quantité;

if(isset($_GET['id'])){  
    die('Le produit a bien été ajouté a votre panier <a href="javascript:history.back()">retourner sur le catalogue</a>'); // la commande mis dans le href permet de revenir un cran en arriere dans lhistorique de naviguation 
}else{
    die("Vous n'avez pas selectioner d'articles a ajouter au panier"); // message d'erreur 
}

header('location:gabarit.php');