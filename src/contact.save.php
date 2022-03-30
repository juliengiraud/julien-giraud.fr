<?php

$title = "Contact - Julien Giraud | Développeur full stack";
$noindex = true;
$description = "Vous pouvez me contacter par mail, téléphone ou en m'ajoutant sur LinkedIn !";
$keywords = "contact, Julien Giraud, étudiant, Lyon 1, mail, e-mail, message, LinkedIn, téléphone";
$canonical = "contact";

require_once("header.php");

?>

<section>
    <div class="container">
        <h1>Me contacter</h1>
        <p class="mt-0">N'hésitez pas à me contacter par <a href="mailto:contact@julien-giraud.fr" title="E-mail Julien Giraud" rel="noopener noreferrer" target="_blank">mail</a>, <a href="tel:+33648227168" title="Téléphone Julien Giraud" rel="noopener noreferrer" target="_blank">téléphone</a> (professionnel uniquement) ou en m'envoyant un message sur <a href="https://www.linkedin.com/in/julien-giraud" title="LinkedIn - Julien Giraud" rel="author noopener noreferrer" target="_blank">LinekdIn</a>.</p>
        <p class="mt-0">Si vous souhaitez me rencontrer je suis étudiant sur le campus de la Doua, donc on peut facilement se retrouver un midi du côté de Lyon 1 / Villeurbanne, ou ailleurs sur Lyon selon nos disponibilités.</p>
    </div>
</section>


<section>
    <div class="container">
        <div class="services">
            <div class="service service-email">
                <div class="service-container">
                    <div class="service-icon"><i class="fa fa-at fa-4x"></i></div>
                    <h2 class="service-title">E-mail</h2>
                    <div class="service-description"><a href="mailto:contact@julien-giraud.fr" title="E-mail Julien Giraud" rel="noopener noreferrer" target="_blank">contact@julien-giraud.fr</a></div>
                </div>
            </div>
            <div class="service service-telephone">
                <div class="service-container">
                    <div class="service-icon"><i class="fa fa-phone fa-4x"></i></div>
                    <h2 class="service-title">Téléphone</h2>
                    <p class="service-title">(professionnel uniquement)</p>
                    <div class="service-description"><a href="tel:+33648227168" title="Téléphone Julien Giraud" rel="noopener noreferrer" target="_blank">06 48 22 71 68</a></div>
                </div>
            </div>
            <div class="service service-linkedin">
                <div class="service-container">
                    <div class="service-icon"><i class="fa fa-linkedin fa-4x"></i></div>
                    <h2 class="service-title">LinkedIn</h2>
                    <div class="service-description"><a href="https://www.linkedin.com/in/julien-giraud" title="LinkedIn - Julien Giraud" rel="author noopener noreferrer" target="_blank">linkedin.com/in/julien-giraud</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

require_once("footer.php");
