<?php

$title = "Portfolio - Julien Giraud | Développeur full stack";
$noindex = true;
$description = "Julien Giraud, étudiant en informatique à Lyon, développeur, exposant de Rubik's Cube et parfois réparateur électronique.";
$keywords = "Julien Giraud, développeur, code, optimisation, graphe planaire orienté, algorithmie, étudiant, informatique, passionné, Lyon, Rubik's Cube, speedcubing, stand, réparation électronique";
$canonical = ""; // "" -> index.php

require_once("header.php");

?>

<?php /* Accueil */
/*
 * Une section avec une image de fond en pleine largeur
 * Le titre sur 2 lignes
 * Un petit bouton pour descendre à la prochaine section
*/
?>
<section class="pt-0">
    <div class="container">
        <h1>Portfolio Julien Giraud | Développeur full stack</h1>
        <p><i class="mr-2 fa fa-exclamation-triangle fa-2x"></i>Ce site est en cours de <strong>développement</strong>. Il manque encore plein de contenu, d'images et de mise en forme. Ça viendra plus tard !</p>

        <p>Sur ce, je vous souhaite une bonne visite :)</p>
    </div>
</section>

<?php /* Présentation */
/*
 * Une section bien carré avec image de moi d'un côté et texte de l'autre
 * Effet style fad-in-left/right
*/
?>
<section class="">
    <div class="container">
        <h2>Qui suis-je ?</h2>
        <p>Julien Giraud, je suis un <strong>passionné</strong> d'informatique et d'algorithmique.<br>
        J'ai un goût prononcé pour le Rubik's Cube et la <strong>programmation</strong>. Je suis cartésien, j'aime la science et je pense que la pile à combustible avec la fusion nucléaire sont les énergies de demain !<br>
        Ensuite j'apprécie le <strong>contact</strong>, je fais du bénévolat au sein d'associations étudiantes, je tiens un stant de Rubik's Cube pour un festival de jeu et j'aime <strong>transmettre</strong> mes connaissances. Aussi j'adore faire de l'escalade, jouer à Minecraft et réparer des vieux tourne-disques.</p>
    </div>
</section>

<?php /* Développement */
/*
 * Image de fond sous la section
 * Effet cartes + transition fad-in-up pour les h3
*/
?>
<section class="">
    <div class="container">
        <h2>Ma philosophie avec l'informatique</h2>
        <p>Pour moi l'informatique c'est un outil qui permet de <strong>donner vie à nos idées</strong>. Je m'intéresse particulièrement à deux choses, <strong>automatiser</strong> des tâches et <strong>résoudre</strong> des problèmes algorithmiques.</p>

        <h3>Automatisation</h3>
        <p>J'ai tendance à créer des programmes pour automatiser toute sorte de choses, plus ou moins complexes. Ça peut être un script pour répéter des copier-collers, un système de mises à jour automatiques pour mon ordinateur ou encore une application connectée pour la gestion de mon budget.</p>
        <p class="activator"><i class="mr-2 activator-rotate-90 fa fa-angle-right fa-lg bold"></i>Quelques exemples</p>
        <ul class="active">
            <li>Les mises à jour de mon ordinateur. Sur Windows je le faisais avec <a href="https://chocolatey.org/" Title="Site officiel de Chocolatey" rel="help noopener noreferrer" target="_blank">Chocolatey</a>. Ceci dit, depuis que je suis sous Linux j'installe tout avec <pre class="inline">apt</pre> et je n'ai jamais eu besoin de mettre à jour manuellement quoi que ce soit.<i class="ml-1 fa fa-lg fa-linux"></i></li>
            <li>L'envoi de commandes <pre class="inline">shell</pre> à mon serveur web PHP sans accès SSH. J'ai développé une page qui simule un terminal, c'est très pratique (<a href="https://github.com/juliengiraud/Shell-PHP" title="Ouvrir le code sur GitHub" rel="next noopener noreferrer" target="_blank">code ici</a>).</li>
            <li>Plus de 40 images à retoucher, le rouge à remplacer par du blanc, le blanc par du rouge et le vert par du bleu. J'ai demandé à Python de s'en charger (<a href="https://github.com/juliengiraud/Scripts-Python/blob/master/img.py" title="Ouvrir le script sur GitHub" rel="next noopener noreferrer" target="_blank">voir ici</a>), ça s'est réglé très vite !</li>
        </ul>

        <h3>Résolution de problèmes</h3>
        <p>Je me pose beaucoup de questions autour du Rubik's Cube, mais elles sont tellement complexes que Google ne peut pas m'aider. Vu que je veux des réponses, je me retrouve à modéliser des cuboïdes, apprendre des technologies improbables et développer des algorithmes plus ou moins complèxes pour répondre à mes questions. C'est très satisfaisant, surtout quand ça marche !</p>
        <p class="activator"><i class="mr-2 activator-rotate-90 fa fa-angle-right fa-lg bold"></i>Quelques problèmes sympas</p>
        <ul class="active">
            <li>Peut-on représenter le déplacement des pièces d'un Rubik's Cube 3×3×3 sous la forme d'un graphe planaire orienté ? Eh bien la réponse est non, la preuve est <a href="https://github.com/juliengiraud/Rubik-s_Cube/tree/master/Graphs" title="Graphe des rotations du 3×3×3" rel="help next noopener noreferrer" target="_blank">ici</a>.
            <li>Comment optimiser la résolution du <a href="https://www.google.com/search?q=curvy+copter+iii" title="Exemples de Curvy Copter III" rel="help noopener noreferrer" target="_blank">Curvy Copter III</a> ? On remet en question les étapes de la méthode, on réfléchit aux algorithmes qui permettraient de gagner du temps, puis on modélise le cube et on génère ces algorithmes par la force. Il y aura un lien <i>ici</i> quand la page sur ce cube sera faite !</li>
            <li>Quel est le circuit logique le plus optimisé permettant de calculer la position d'arrivée d'une pièce de Rubik's Cube à partir de sa position de départ et du mouvement utilisé ? On pourrait écrire une thèse sur le sujet. Il s'agit en réalité d'un problème <a href="https://fr.wikipedia.org/wiki/Probl%C3%A8me_NP-complet" title="Définition NP-complet sur Wikipédia" rel="help noopener noreferrer" target="_blank">NP-complet</a>, autrement dit on ne peut pas le résoudre en un temps raisonnable. On peut cependant trouver une solution satisfaisante à l'aide des équations logiques. Une synthèse de mon travail sur cette solution se trouve <a href="https://github.com/juliengiraud/Rubik-s_Cube/" title="Synthèse circuit logique des rotations du Rubik's Cube" rel="help next noopener noreferrer" target="_blank">ici</a>.</li>
        </ul>
    </div>
</section>

<?php /* Parcours - rajouter les assos */
/*
 * Mettre couleur de fond qui change genre dégradé en fonction du scroll avec un petit section listener
*/
?>
<section class="section-border-top">
    <div class="container">
        <h2>Mon parcours</h2>

        <ul class="parcours">
            <li>
                <div><span>2016 / 2017</span><h3>Bac scientifique générale</h3></div>
                <p>J'ai passé un Bac S-SI (Science de l'Ingénieur) au Lycée Édouard Branly à Lyon 5<sup>em</sup>. J'ai profité de cette année pour apprendre les bases de la <strong>programmation</strong> en Python, dans le cadre des cours d'ISN que je suivais sans y être inscrit.</p>
            </li>
            <li>
                <div><span>2017 / 2019</span><h3>DUT informatique</h3></div>
                <p>Après le Bac j'ai intégré le DUT info de la Doua (IUT Lyon 1) où j'ai commencé à étudier différents aspects de l'informatique par la <strong>pratique</strong>. J'ai pu emmagasiné un maximum de connaissances techniques et générales car l'informatique ne représente que 50% de l'apprentissage. Aussi j'ai beaucoup gagné en expérience à la suite des <strong>5 mois</strong> de développement web que j'ai réalisé chez Influactive pour clôturer cette formation.</p>
            </li>
            <li>
                <div><span class="ml-1">2019 / 2020</span><h3>Licence informatique</h3></div>
                <p>Dans la continuité du DUT j'ai réalisé une 3<sup>ème</sup> année de Licence informatique générale à Lyon 1. J'ai pu améliorer mon niveau de pratique dans tous les domaines, en plus de l'enrichir d'un bagage <strong>théorique</strong> conséquent. Enfin, mes différentes options ont permis de confirmer mon goût pour les problèmes d'<strong>optimisation combinatoire</strong>, et renforcer mon intérêt pour l'<strong>intelligence artificielle</strong> (IA).</p>
            </li>
            <li>
                <div><span class="ml-1">2020 / 2021</span><h3>Master informatique en alternance (M1)</h3></div>
                <p>Je suis actuellement en première année de Master informatique à Lyon 1 et alternant <strong>développeur full stack</strong> chez <a href="https://www.finalgo.fr/" title="Site de Finalgo" rel="help noopener noreferrer" target="_blank">Finalgo</a> (super startup !). Malheureusement cette alternance n'est pas compatible avec mon projet de <strong>spécialisation en IA</strong> pour le M2, elle devrait donc prendre fin au bout d'un an.</p>
            </li>
        </ul>
    </div>
</section>

<?php /* Rubik's cube / Expositions / Formations / Recherche */
/*
 * Là faut du parallax effect avec genre la photo du stand
 * Puis faudrait un truc un peu bourin info geek en image pour coller avec la troisième partie
*/
?>
<section class="section-border-top">
    <div class="container">
        <h2>Ma passion pour le Rubik's Cube</h2>

        <p>Le Rubik's Cube est une de mes plus vieilles passions. Après avoir appris à résoudre ce casse-tête j'ai découvert le <strong>speedcubing</strong>, la discipline qui conciste à résoudre le Rubik's Cube et ses variantes le plus rapidement possible. Petit à petit j'ai accumulé les différents cubes classiques (2×2, 3×3, 4×4…) j'ai appris à les résoudre et je me suis intéressé aux méthodes avancées. J'ai eu l'occasion de participer à deux compétitions de speedcubing (<a href="https://www.worldcubeassociation.org/persons/2015GIRA01" title="Profil compétiteur WCA" rel="author help noopener noreferrer" target="_blank">voir ici</a>), je ne suis pas un grand compétiteur mais l'ambiance est très sympa !</p>

        <h3>Stand de speedcubing</h3>
        <p>Depuis 2016 nous tenons un stand bénévole de Rubik's Cube avec <strong>Clément Cherblanc</strong>. Ce stand fait partie des attractions du festival <a href="https://www.google.com/search?q=jeux+m%27amuse+thones" title="Festival Jeux m'amuse à Thônes" rel="help noopener noreferrer" target="_blank">Jeux m'amuse</a> organisé par la ville de Thônes (74). Durant deux jours nous faisons des démonstrations de speedcubing et partageons nos connaissances avec les passants, en tant que représentants de l'<a href="https://www.speedcubingfrance.org/" title="Site de l'AFS" rel="help noopener noreferrer" target="_blank">Association Française de Speedcubing</a> (AFS).</p>
        <?php /* <a class="button-link" href="<?= $adresse ?>/realisations-rubiks-cube" rel="next">Voir notre stand</a> */ ?>

        <h3>Des Rubik's cubes à l'informatique</h3>
        <p>Lorsque j'ai commencé à apprendre la méthode Fridrich (méthode de résolution avancée), il n'était pas facile de se former en ligne avec une synthèse toute faite. Finalement j'ai rédigé mon propre <a href="<?= $adresse ?>/formation-rubiks-cube" title="Formation méthode Fridrich">guide sur la méthode Fridrich</a> que j'ai partagé sur YouTube. J'ai également travaillé sur différents projets informatiques en rapport avec la modélisation et la <strong>génération d'algorithmes</strong>. L'objectif est soit de comprendre et améliorer une méthode existante, soit d'en créer une pour des cubes qui n'en ont pas encore.</p>
        <?php /* <a class="button-link" href="<?= $adresse ?>/realisations-rubiks-cube" rel="next">Toutes mes réalisations</a> */ ?>
    </div>
</section>

<?php /* Réparations */
/*
 * Ici je pensais à une section image-texte comme en haut avec un peu de transition
 * Peut-être l'effet bulle-zoom d'eye tech care sur un fer à souder
 * Pas encore d'image de moi en bricoleur ici, des outils ou genre image bricolage bank d'images
*/

/*<section class="pb-0">
    <div class="container">
        <h2>Réparations électroniques</h2>
        <p>Je suis loin d'être au niveau d'un ingénieur en électronique, mais je me débrouille plutôt bien avec une caisse à outils et un fer à souder ! Depuis plusieurs années je donne une seconde vie à des objets divers, il est étonnant de voir tout ce qu'on peut réparer sans être un professionnel du milieu.</p>
    </div>
</section>
*/?>

<?php

require_once("footer.php");
