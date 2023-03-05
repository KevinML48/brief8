<?php
session_start();
if(!isset($_SESSION['panier'])) // on verifie si il a crée une session panier
    $_SESSION['panier'] = []; // Sinon on la crée pour lui
?>

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="Contenu/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Panier</title>   <!-- Élément spécifique -->
  </head>
  <body>

  <div id="global">
      <header>
        <a href="index.php"><h1 id="titreBlog">MusicK</h1></a>
      </header>
      <div id="contenu">
        <?= $contenu ?>   <!-- Élément spécifique -->
      </div>
      <footer id="piedBlog">
        Blog réalisé avec PHP, HTML5 et CSS.
      </footer>
    </div> <!-- #global -->

  </body>
</html>