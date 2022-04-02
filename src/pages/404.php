<?php

$title = "Erreur 404 - Julien Giraud | Développeur full stack";
$noindex = true;
$description = "";
$keywords = "";
$canonical = "";

require_once("header.php");

?>

<section>
    <div class="container-center">
        <h1>Oups... Vous êtes perdu.<br>Où voulez-vous aller ?</h1>
    </div>
</section>

<section>
    <div class="container-center">
        <div class="services">
            <div class="service service-linkedin">
                <a href="https://www.linkedin.com/in/julien-giraud" title="LinkedIn - Julien Giraud" rel="author noopener noreferrer" class="no-decoration">
                    <div class="service-container">
                        <div class="service-icon"><i class="fa fa-linkedin fa-4x"></i></div>
                        <h2 class="service-title">La page LinkedIn</h2>
                        <div class="service-description underline">linkedin.com/in/julien-giraud</div>
                    </div>
                </a>
            </div>
            <div class="service service-email">
                <a href="./formation-rubiks-cube" title="Formation Rubik's Cube" rel="next" class="no-decoration">
                    <div class="service-container">
                        <div class="service-icon"><i class="fa fa-cube fa-4x"></i></div>
                        <h2 class="service-title">La page Rubik's Cube</h2>
                        <div class="service-description underline">Formation méthode Fridrich</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<?php

require_once("footer.php");
