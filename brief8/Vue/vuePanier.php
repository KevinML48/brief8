<?php
session_start();
if(!isset($_SESSION['panier'])) // on verifie si il a crée une session panier
    $_SESSION['panier'] = []; // Sinon on la crée pour lui
?>

<header>
        <a href="index.php"><h1 id="titreBlog">MusicK</h1></a>
      </header>

  <div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-primary" type="button"><a href="index.php">Articles du moment</a></button>
</div>

  <table class="liste">

        <th>Designation</th>
        <th>Prix</th>
        <th>Quantité</th>
        <th>Informations</th>
        <th>Action</th>
<tr>
  <td>Harley Benton GL-2NT</td>
  <td>200 €</td>
  <td><input type="text" id="prd_1" value="1"></td> <!-- Avec la base de données on connait notre id, enfate on connais toute les information qui vont nous aider au developpement -->
  <td><button class="btn btn-primary me-md-2" onclick="add(1)">ADD</button></td> <!-- Avec sa on peux mettre l'id de nos instrument dans la fonction onclick -->
</tr>

<!-- ========================= -->

<tr>
  <td>flute traversere</td>
  <td>70 €</td>
  <td><input type="text" id="prd_2" value="1"></td>
  <td><button class="btn btn-primary me-md-2" onclick="add(2)">ADD</button></td>
</tr>

<!-- ========================= -->

<tr>
  <td>Saxophone</td>
  <td>1500 €</td>
  <td><input type="text" id="prd_3" value="1"></td>
  <td><button class="btn btn-primary me-md-2" onclick="add(3)">ADD</button></td>
</tr>

<!-- ========================= -->

<tr>
  <td>Violon</td>
  <td>60 €</td>
  <td><input type="text" id="prd_4" value="1"></td>
  <td><button class="btn btn-primary me-md-2" onclick="add(4)">ADD</button></td>
</tr>

<!-- ========================= -->

<tr>
  <td>Tambour</td>
  <td>60 €</td>
  <td><input type="text" id="prd_5" value="1"></td>
  <td><button class="btn btn-primary me-md-2" onclick="add(5)">ADD</button></td>
</tr>

<!-- ========================= -->

<tr>
  <td>Accordéon</td>
  <td>3000 €</td>
  <td><input type="text" id="prd_6" value="1"></td>
  <td><button class="btn btn-primary me-md-2" onclick="add(6)">ADD</button></td>
</tr>

<!-- ========================= -->

<tr>
  <td>Guitare electrique</td>
  <td>4000 €</td>
  <td><input type="text" id="prd_7" value="1"></td>
  <td><button class="btn btn-primary me-md-2" onclick="add(7)">ADD</button></td>
</tr>
</table>

<div>
    <a href="Vue/panier.php">Voir le panier</a>
</div>

    <script src="Contenu/javascript.js"></script>