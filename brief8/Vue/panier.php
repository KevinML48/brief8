<?php
session_start();
$panier = $_SESSION['panier'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Panier</title>
</head>
<body>

<table>
    <tr>
        <th>ID</th>
        <th>Quantité</th>
</tr>
<?php foreach($panier as $id => $quantité): ?>
<tr>
    <td><?= $id ?></td>
    <td><?= $quantité ?></td>
</tr>
<?php endforeach; ?>

<div>
    <a href="vider.php">Vider le panier</a>
</div>

</body>
</html>