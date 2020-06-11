<?php

$title = "";
$noindex = true;
$description = "";
$keywords = "";
$canonical = "";

require_once("header.php");

/* Parler des réalisations d'un point de vue technique, à prioris mes réalisations seront --publiés-- sur les autres pages du site mais pas --expliqués--
mettre un rel=alternate pour le lien vers le livret*/

?>

<section>
    <div class="container">
        <h1>Désolé cette page n'existe pas encore</h1>
        <a href="<?= $adresse ?>" title="Accueil portfolio" rel="prev"> Retour vers l'accueil</a>
    </div>
</section>

<?php

require_once("footer.php");
