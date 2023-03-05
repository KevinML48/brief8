
 <!-- ob_start(); Son rôle est de déclencher la mise en tampon du flux HTML de sortie : au lieu d'être envoyé au navigateur, ce flux est stocké en mémoire ; -->
 <button type="button" class="btn btn-dark"><a href="index.php?action=panier"></button>

<?php foreach ($articles as $article):?>
    <section class="cards">
<article class="card card--1">
  <div class="card__info-hover">
    <p>En stock</p>
      <div class="card__clock-info">
      <img src="<?= $article['img'] ?>">
      </div>
    
  </div>
  <div class="card__img">
  <img src="<?= $article['img'] ?>">
  </div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> <p class="card-text"><?= $article['prix'] ?> € </p></span>
    <h3 class="card__title"><?= $article['titre'] ?></h3>
    <span class="card__by"><a class="card__author" title="author" href="<?= "index.php?action=article&id=" . $article['id'] ?>">Informations</a></span>
  </div>
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href="index.php?action=panier&id=">Panier</a>
</div>
</article>
  </section>

<?php endforeach; ?>


