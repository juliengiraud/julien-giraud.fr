<?php

$title = "Erreur 404 - Julien Giraud | Développeur full stack";
$noindex = true;
$description = "";
$keywords = "";
$canonical = "";

require_once("header.php");

?>

<section>
    <div class="container">
        <h1>Erreur 404 : Page non trouvée</h1>
        <p>
            <strong>Désolé cette page n'existe pas !</strong>
            <a href="<?= $adresse ?>" title="Accueil portfolio" rel="prev"> Retour vers l'accueil</a>
        </p>
    </div>
</section>

<?php

require_once("footer.php");
