<?php

$adresse = file_get_contents("config.txt");
$lastupdate = "10/08/2020";

?>

<!DOCTYPE html>

<!-- Bienvenue dans mon code, je vous souhaite une bonne lecture ! -->

<html lang="fr">
  <head>
    <?php /* Site */ ?>
    <meta charset="utf-8">
    <meta name="author" content="Julien GIRAUD">
    <meta name="copyright" content="<?= $adresse ?>">
    <meta name="language" content="fr">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= $adresse ?>/images/julien-giraud-initiales.png">

    <?php /* CSS */ ?>
    <link rel="stylesheet" type="text/css" href="<?= $adresse ?>/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="<?= $adresse ?>/css/icons.css">
    <link rel="stylesheet" type="text/css" href="<?= $adresse ?>/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?= $adresse ?>/css/variables.css">
    <link rel="stylesheet" type="text/css" href="<?= $adresse ?>/css/global.css">
    <link rel="stylesheet" type="text/css" href="<?= $adresse ?>/css/styles.css">

    <?php /* Javascript */ ?>
    <script src="<?= $adresse ?>/javascript/main.js" async></script>

    <?php /* Page */ ?>
    <title><?= $title ?></title>
    <?= ($noindex ? '<meta name="robots" content="noindex">' : '') . "\n" ?>
    <meta name="description" content="<?= $description ?>">
    <meta name="keywords" content="<?= $keywords ?>">
    <link rel="canonical" href="<?= $adresse . '/' . $canonical ?>">
  </head>

  <body>
    <header>
      <nav id="navbar" class="navbar up">
        <div class="navbar-container">
          <a class="brand" href="<?= $adresse ?>" title="Accueil portfolio">
            <img src="<?= $adresse ?>/images/julien-giraud-developpeur-rubiks-cube.svg" alt="icone accueil" class="icon mr-4">
            Accueil
          </a>
          <ul class="navbar-items">
            <li class="navbar-item has-dropdown">
              <a href="javascript:void(0)">
                <img src="<?= $adresse ?>/images/icones/symbole-developpeur.svg" alt="icone code" class="icon mr-2">
                Développement
                <i class="fa fa-angle-down fa-lg bold"></i>
              </a>
              <ul class="navbar-items">
                <li class="navbar-item">
                  <a href="<?= $adresse ?>/developpement-web" title="Mes projets web">Développement web</a>
                </li>
                <li class="navbar-item">
                  <a href="<?= $adresse ?>/developpement-logiciel" title="Mes projets logiciel">Développement logiciel</a>
                </li>
                <li class="navbar-item navbar-divider">
                  <a href="https://github.com/juliengiraud" title="Voir mes projets sur GitHub" rel="author noopener noreferrer" target="_blank">
                    <i class="mr-2 fa fa-github fa-2x"></i>Tous mes projets
                  </a>
                </li>
              </ul>
            </li>

            <li class="navbar-item has-dropdown">
              <a href="javascript:void(0)">
                <img src="<?= $adresse ?>/images/icones/rubiks-cube-melange.svg" alt="icone rubik's cube" class="icon mr-2">
                Rubik's Cube
                <i class="fa fa-angle-down fa-lg bold"></i>
              </a>
              <ul class="navbar-items">
                <li class="navbar-item">
                  <a href="<?= $adresse ?>/expositions-rubiks-cube" title="Stand de speedcubing">Expositions - Jeux M'amuse</a>
                </li>
                <li class="navbar-item">
                  <a href="<?= $adresse ?>/formation-rubiks-cube" title="Consulter mon guide">Guide méthode Fridrich</a>
                </li>
                <li class="navbar-item navbar-divider">
                  <a href="<?= $adresse ?>/realisations-rubiks-cube" title="Mes projets sur le Rubik's Cube">
                    <i class="mr-2 fa fa-cogs fa-1x"></i>Mes réalisations
                  </a>
                </li>
              </ul>
            </li>

            <li class="navbar-item">
              <a href="<?= $adresse ?>/reparations" title="Mes réparations">
                <img src="<?= $adresse ?>/images/icones/fer-a-souder-reparation.svg" alt="icone prise electrique" class="icon mr-2">
                Réparations
              </a>
            </li>

            <li class="navbar-item">
              <a href="<?= $adresse ?>/contact" title="Me contacter">
                <img src="<?= $adresse ?>/images/icones/message.svg" alt="icone message" class="icon mr-2">
                Contact
              </a>
            </li>
          </ul>
          <div id="navbar-burger" class="burger">
            <div class="burger-box">
              <div class="burger-inner"></div>
            </div>
          </div>
        </div>
      </nav>
    </header>
