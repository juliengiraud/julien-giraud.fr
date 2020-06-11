<?php

$adresse = "https://www.julien-giraud.fr";

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <!-- Site -->
        <meta charset="utf-8">
        <meta name="author" content="Julien Giraud">
        <meta name="copyright" content="<?= $adresse ?>">
        <meta name="language" content="fr">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?= $adresse ?>/images/julien-giraud-initiales.png">

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="<?= $adresse ?>/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="<?= $adresse ?>/css/icons.css">
        <link rel="stylesheet" type="text/css" href="<?= $adresse ?>/css/fonts.css">
        <link rel="stylesheet" type="text/css" href="<?= $adresse ?>/css/variables.css">
        <link rel="stylesheet" type="text/css" href="<?= $adresse ?>/css/global.css">
        <link rel="stylesheet" type="text/css" href="<?= $adresse ?>/css/styles.css">

        <!-- Page -->
        <title><?= $title ?></title>
        <?= ($noindex ? '<meta name="robots" content="noindex">' : '') . "\n" ?>
        <meta name="description" content="<?= $description ?>">
        <meta name="keywords" content="<?= $keywords ?>">
        <link rel="canonical" href="<?= $adresse . $canonical ?>">
    </head>

    <body>
        <header>
            <nav id="navbar" class="navbar up">
                <div class="navbar-container">
                    <a class="brand" href="/" title="Accueil - Julien Giraud Développeur">
                        <img src="<?= $adresse ?>/images/julien-giraud-developpeur-rubiks-cube.svg" alt="icone accueil" class="icon mr-4">
                        Accueil
                    </a>
                    <ul class="navbar-items">
                        <li class="navbar-item has-dropdown">
                            <a href="javascript:void(0)" title="Développement - Julien Giraud">
                                <img src="<?= $adresse ?>/images/icones/symbole-developpeur.svg" alt="icone code" class="icon mr-2">
                                Développement
                                <i class="fa fa-angle-down fa-lg bold"></i>
                            </a>
                            <ul class="navbar-items">
                                <li class="navbar-item"><a href="#" title="Projets web - Julien Giraud Développeur">Développement web</a></li>
                                <li class="navbar-item"><a href="#" title="Projets logiciel - Julien Giraud Développeur">Développement logiciel</a></li>
                                <hr class="navbar-divider">
                                <li class="navbar-item"><a href="https://github.com/juliengiraud" title="GitHub - Julien Giraud">Mes projets</a></li>
                            </ul>
                        </li>

                        <li class="navbar-item has-dropdown">
                            <a href="javascript:void(0)" title="Rubik's Cube - Julien Giraud">
                                <img src="<?= $adresse ?>/images/icones/rubiks-cube-melange.svg" alt="icone rubik's cube" class="icon mr-2">
                                Rubik's Cube
                                <i class="fa fa-angle-down fa-lg bold"></i>
                            </a>
                            <ul class="navbar-items">
                                <li class="navbar-item"><a href="#" title="Esposant au Jeux M'amuse - Julien Giraud">Expositions - Jeux M'amuse</a></li>
                                <li class="navbar-item"><a href="#" title="Tutoriels Rubik's Cube - Julien Giraud">Formation</a></li>
                                <hr class="navbar-divider">
                                <li class="navbar-item"><a href="https://github.com/juliengiraud/Rubik-s_Cube" title="Projets en Rubik's Cube - Julien Giraud">Mes réalisations</a></li>
                            </ul>
                        </li>

                        <li class="navbar-item"><a href="#" title="Réparations - Julien Giraud">
                            <img src="<?= $adresse ?>/images/icones/fer-a-souder-reparation.svg" alt="icone prise electrique" class="icon mr-2">
                            Réparations
                        </a></li>

                        <li class="navbar-item"><a href="/contact" title="Contact - Julien Giraud">
                            <img src="<?= $adresse ?>/images/icones/message.svg" alt="icone message" class="icon mr-2">
                            Contact
                        </a></li>
                    </ul>
                    <div id="navbar-burger" class="burger">
                        <div class="burger-box">
                            <div class="burger-inner"></div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
