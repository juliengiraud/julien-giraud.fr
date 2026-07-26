<?php

$title = "Mentions légales - Julien Giraud | Développeur full stack";
$noindex = false;
$description = "Mentions légales du site julien-giraud.fr.";
$keywords = "Julien Giraud, mentions légales, OVH, hébergeur";
$canonical = "/mentions-legales"; // "" -> index.php

require_once("header.php");

?>

<section>
    <div class="container">
        <h1>Mentions légales - Julien Giraud</h1>

        <h2>Mentions propres au site</h2>

        <h3>Créateur du site</h3>
        <p>Ce site a été crée par Julien GIRAUD :<br>
        <a href="mailto:giraud740@gmail.com" title="E-mail Julien Giraud" rel="noopener noreferrer" target="_blank">giraud740@gmail.com</a></p>

        <h3>Hébergeur du site</h3>
        <p>Ce site est hébergé chez OVH :<br>
        2 rue Kellermann - 59100 Roubaix - France<br>
        Plus d'informations sur <a href="https://www.ovh.com/" title="Site OVH" rel="nofollow noopener noreferrer" target="_blank">ovh.com.</a></p>

        <h2>Mentions relatives à l'utilisation de cookies</h2>
        <p>Ce site n'utilise pas de cookies.</p>

        <h2>Mentions relatives à l'utilisation de données personnelles</h2>
        <p>Ce site n'utilise pas de données personnelles.</p>
    </div>
</section>

<?php

require_once("footer.php");
