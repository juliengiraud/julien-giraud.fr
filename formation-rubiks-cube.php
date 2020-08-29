<?php

$title = "Le guide complet sur la Méthode Fridrich - Julien Giraud";
$noindex = false;
$description = "Tout ce qu'il vous faut pour résoudre le Rubik's Cube 3×3×3 à l'aide de la méthode Fridrich et vous lancer dans le Speedcubing.";
$keywords = "Rubik's cube, guide, méthode, Fridrich, méthode Fridrich, Jessica Fridrich, apprentissage, algorithmes, CFOP, croix, F2L, OLL, PLL, exemple, astuce, speedcubing, langage universel";
$canonical = "formation-rubiks-cube";

require_once("header.php");

?>

<section id="intro">
  <div class="container">
    <div class="title-container">
      <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/grand-crane.svg" width="204" height="277" alt="Grand crane">
      <h1>Le guide complet sur la Méthode Fridrich</h1>
    </div>
    <div class="bold mb-8 flex justify-center">
      <a href="<?= $adresse ?>/download/guide-methode-fridrich" title="Télécharger le guide" rel="alternate"><i class="mr-2 fa fa-2x fa-download"></i>Télécharger le guide au format PDF</a>
    </div>
    <div class="flex flex-row align-center flex-wrap-sm">
      <div class="cube-cover mb-6">
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/grand-cube-engrenages.svg" width="684" height="652" alt="Grand cube engrenages">
      </div>
      <div class="cube-info">
        <span class="mt-4">Réalisé par <strong>Julien Giraud</strong></span>
        <p><a href="https://github.com/juliengiraud/Rubik-s_Cube/tree/master/M%C3%A9thode%20Fridrich" title="Ouvrir les sources du guide sur GitHub" rel="help noopener noreferrer" target="_blank">Sources et historique du guide</a><br>
        <a href="https://www.youtube.com/julien-craf" title="Chaîne YouTube" rel="author noopener noreferrer" target="_blank">Chaîne YouTube</a><br>
        Dernière modification : 10/08/2020</p>
      </div>
    </div>
  </div>
</section>

<section id="summary">
  <div class="container">
    <h2>Méthode Fridrich : Sommaire</h2>
    <ul>
      <li>
        <strong>Introduction à la méthode</strong>
        <ul>
          <li><a href="<?= $adresse ?>/<?= $canonical ?>#steps" title="Se rendre à la présentation" rel="next">Présentation de la méthode</a></li>
          <li><a href="<?= $adresse ?>/<?= $canonical ?>#universal-language" title="Se rendre au langage universel" rel="next">Présentation du <strong>langage universel</strong></a></li>
          <li><a href="<?= $adresse ?>/<?= $canonical ?>#advice" title="Se rendre aux astuces et conseils" rel="next">Astuces et conseils d'apprentissage</a></li>
        </ul>
      </li>
      <li>
        <strong>Méthode complète</strong>
        <ul>
          <li><a href="<?= $adresse ?>/<?= $canonical ?>#F2L" title="Se rendre aux F2L" rel="next">Les <strong>41</strong> F2L (First Two Layers)</a></li>
          <li><a href="<?= $adresse ?>/<?= $canonical ?>#OLL" title="Se rendre aux OLL" rel="next">Les <strong>57</strong> OLL (Orientation Last Layer)</a></li>
          <li><a href="<?= $adresse ?>/<?= $canonical ?>#PLL" title="Se rendre aux PLL" rel="next">Les <strong>21</strong> PLL (Permutation Last Layer)</a></li>
        </ul>
      </li>
    </ul>
  </div>
</section>

<section id="steps">
  <div class="container">
    <h2>Méthode Fridrich : Qu'est-ce la méthode CFOP ?</h2>
    <blockquote>La méthode créée par <strong>Jessica Fridrich</strong> autrement appelée la méthode CFOP (Cross F2L OLL PLL) est une technique de résolution du Rubik's Cube 3x3x3 très rapide et utilisée par la plupart des champions de speedcubing.<br>
    <br>
    Cette méthode ne nécessite pas la moindre "grande intelligence", les seules qualités requises sont le <strong>temps</strong> ainsi que la <strong>patience</strong> Il n’est pas nécessaire d’avoir une bonne mémoire tant que vous <strong>pratiquez</strong> régulièrement !</blockquote>
    <p>Le but est de résoudre le Rubik's Cube en <strong>4 étapes</strong> : la <strong>croix</strong>, les <strong>F2L</strong> en 4 fois, les <strong>OLL</strong> et les <strong>PLL</strong> En résumé, chaque résolution nécessitera au maximum 6 algorithmes.</p>

    <div>
      <div class="title-picture-text">
        <h3 class="title">Étape 1</h3>
        <div class="picture-text">
          <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/cubes/croix.svg" width="227" height="227" alt="Croix">
          <p>La <strong>croix</strong> (Cross) est résolue logiquement avec une moyenne de 8 mouvements en 2 ou 3 secondes. Pour arriver à la résoudre aussi rapidement il est nécessaire de bien connaître les couleurs de son cube et de beaucoup s'entraîner afin de préparer les mouvements à l'avance. Il n'y a pas vraiment d'algorithme à apprendre pour cette étape.</p>
        </div>
      </div>

      <div class="title-picture-text">
        <h3>Étape 2</h3>
        <div class="picture-text">
          <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/cubes/F2L.svg" width="227" height="227" alt="F2L">
          <p>Les <strong>F2L</strong> (First Two Layers) sont l'étape la plus longue consistant à <strong>résoudre</strong> les <i>deux premiers étages</i>. Le but est de regrouper un coin et une arête complémentaires appartenant à la face de référence (dont la couleur est celle de la croix) puis de les placer en même temps.<br>
          Cette étape regroupe 41 algorithmes mais elle peut se faire logiquement pour certains. Il est cependant préférable d'apprendre les algorithmes de la méthode pour aller plus vite.</p>
        </div>
      </div>

      <div class="title-picture-text">
        <h3>Étape 3</h3>
        <div class="picture-text">
          <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/cubes/OLL.svg" width="227" height="227" alt="OLL">
          <p>Les <strong>OLL</strong> (Orientation Last Layer) sont l'étape consistant à <strong>orienter</strong> tous les cubes de la couleur de la dernière face sur celle-ci (la face opposée à la première face) afin qu'elle soit unicolore et qu'il ne reste plus que la troisième couronne à compléter.<br>
          Cette étape regroupe 57 algorithmes.</p>
        </div>
      </div>

      <div class="title-picture-text">
        <h3>Étape 4</h3>
        <div class="picture-text">
          <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/cubes/grand-cube-fait.svg" width="227" height="227" alt="Grand cube fait">
          <p>Les <strong>PLL</strong> (Permutation Last Layer) sont l'étape où l'on va <strong>permuter</strong> les coins et les arêtes de la troisième couronne afin de refaire le cube.<br>
          Cette étape regroupe 21 algorithmes.</p>
        </div>
      </div>
  </div>
</section>

<section id="universal-language">
  <div class="container">

    <h2>Méthode Fridrich : Le langage universel</h2>

    <blockquote>Dans le mondu du Rubik's Cube, le langage universel est très utile. Il permet à la fois d'écrire n'importe quel algorithme de façon très courte (une lettre par mouvement) et peut être compris par n'importe qui dans le monde utilisant une méthode avancée, ce qui permet de suivre toute sorte de tutoriel avancé en anglais. De plus ce langage est souvent utilisé dans les logiciels de modélisation tel que Cube Explorer (très utile pour chercher et tester des algorithmes).</blockquote>

    <p>Pour lire ce langage il faut connaître les choses suivantes</p>

    <ul>
      <li><i class="space-arrow ti-angle-double-right"></i>Une <strong>lettre</strong> correspond à une face (Front - Up - Right - Left - Down - Back), plus le M pour la tranche du Milieu</li>
      <li><i class="space-arrow ti-angle-double-right"></i>Une <strong>majuscule</strong> signifie qu'il faut tourner la face dans le sens des aiguilles d'une montre. Une <strong>apostrophe</strong> correspond au mouvement inverse donc dans le sens inverse des aiguilles d'une montre et le chiffre <strong>2</strong> veut dire qu'il faut tourner deux fois la face (donc le sens n'a <i>aucune importance</i>)</li>
      <li><i class="space-arrow ti-angle-double-right"></i>Une minuscule signifie qu'il faut tourner la face et la tranche du milieu dans le même sens</li>
    </ul>

    <div class="picture-text">
      <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/cubes/moyen-cube-fait.svg" width="159" height="159" alt="moyen-cube-fait">
      <p>Afin de vous présenter le langage, nous allons mettre la face bleue devant nous avec la face jaune au dessus</p>
    </div>

    <ul class="moves">
      <li>
        <strong>R</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/R.svg" width="159" height="159" alt="R" class="ml-2">
      </li>
      <li>
        <strong>R'</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/R'.svg" width="159" height="159" alt="R'" class="ml-2">
      </li>
      <li>
        <strong>R2</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/R2.svg" width="159" height="159" alt="R2" class="ml-2">
      </li>
      <li>
        <strong>r</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/r.svg" width="159" height="159" alt="r" class="ml-2">
      </li>
      <li>
        <strong>r'</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/r'.svg" width="159" height="159" alt="r'" class="ml-2">
      </li>
      <li>
        <strong>r2</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/r2.svg" width="159" height="159" alt="r2" class="ml-2">
      </li>
      <li>
        <strong>L</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/L.svg" width="159" height="159" alt="L" class="ml-2">
      </li>
      <li>
        <strong>L'</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/L'.svg" width="159" height="159" alt="L'" class="ml-2">
      </li>
      <li>
        <strong>L2</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/L2.svg" width="159" height="159" alt="L2" class="ml-2">
      </li>
      <li>
        <strong>l</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/l.svg" width="159" height="159" alt="l" class="ml-2">
      </li>
      <li>
        <strong>l'</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/l'.svg" width="159" height="159" alt="l'" class="ml-2">
      </li>
      <li>
        <strong>l2</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/l2.svg" width="159" height="159" alt="l2" class="ml-2">
      </li>
      <li>
        <strong>U</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/U.svg" width="159" height="159" alt="U" class="ml-2">
      </li>
      <li>
        <strong>U'</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/U'.svg" width="159" height="159" alt="U'" class="ml-2">
      </li>
      <li>
        <strong>U2</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/U2.svg" width="159" height="159" alt="U2" class="ml-2">
      </li>
      <li>
        <strong>u</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/u.svg" width="159" height="159" alt="u" class="ml-2">
      </li>
      <li>
        <strong>u'</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/u'.svg" width="159" height="159" alt="u'" class="ml-2">
      </li>
      <li>
        <strong>u2</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/u2.svg" width="159" height="159" alt="u2" class="ml-2">
      </li>
      <li>
        <strong>D</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/D.svg" width="159" height="159" alt="D" class="ml-2">
      </li>
      <li>
        <strong>D'</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/D'.svg" width="159" height="159" alt="D'" class="ml-2">
      </li>
      <li>
        <strong>D2</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/D2.svg" width="159" height="159" alt="D2" class="ml-2">
      </li>
      <li>
        <strong>d</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/d.svg" width="159" height="159" alt="d" class="ml-2">
      </li>
      <li>
        <strong>d'</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/d'.svg" width="159" height="159" alt="d'" class="ml-2">
      </li>
      <li>
        <strong>d2</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/d2.svg" width="159" height="159" alt="d2" class="ml-2">
      </li>
      <li>
        <strong>F</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/F.svg" width="159" height="159" alt="F" class="ml-2">
      </li>
      <li>
        <strong>F'</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/F'.svg" width="159" height="159" alt="F'" class="ml-2">
      </li>
      <li>
        <strong>F2</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/F2.svg" width="159" height="159" alt="F2" class="ml-2">
      </li>
      <li>
        <strong>B</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/B.svg" width="159" height="159" alt="B" class="ml-2">
      </li>
      <li>
        <strong>B'</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/B'.svg" width="159" height="159" alt="B'" class="ml-2">
      </li>
      <li>
        <strong>B2</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/B2.svg" width="159" height="159" alt="B2" class="ml-2">
      </li>
      <li>
        <strong>M</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/M.svg" width="159" height="159" alt="M" class="ml-2">
      </li>
      <li>
        <strong>M'</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/M'.svg" width="159" height="159" alt="M'" class="ml-2">
      </li>
      <li>
        <strong>M2</strong>
        <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/mouvements/M2.svg" width="159" height="159" alt="M2" class="ml-2">
      </li>
    </ul>

    <p>Dans le langage universel complet il y a d'autres mouvements qui ne sont pas utilisés dans ce guide, aussi il y a les <i>changements de points de vue</i> que je note <i>différemment</i>.<br>
    <br>
    Les changements de points de vue sont représentés par une flèche indiquant la face de référence avant et après avoir changé de point de vue.<br>
    Pour généraliser, FaceA <i class="fa fa-sm fa-long-arrow-right"></i> FaceB signifie que l'on doit déplacer le cube <strong>sans faire de mouvement</strong> de façon à ce que la face "B" soit positionnée à la place de la face "A".<p>

    <div class="title-container">
      <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/petit-crane.svg" width="129" height="144" alt="petit-crane">
      <h3>Méthode Fridrich : <strike>Le langage universel</strike> Exception au langage</h3>
    </div>

    <div class="picture-text">
      <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/cubes/moyen-cube-fait.svg" width="159" height="159" alt="moyen-cube-fait">
      <p>On prend une fois de plus la face bleue comme face de référence. Voici donc tous les cas utilisés dans ce guide.</p>
    </div>

    <ul class="rotate">
      <li>
        <div>
          <span>Départ</span>
          <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/cubes/moyen-cube-fait.svg" width="159" height="159" alt="moyen-cube-fait">
        </div>
        <i class="super-i fa fa-3x fa-long-arrow-right"></i>
        <div>
          <span>Arrivée</span>
          <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/cubes/moyen-cube-fait-R->F.svg" width="159" height="159" alt="moyen-cube-fait-R->F">
        </div>
        <span>La face de droite passe à la place de la face de devant. On le note <strong>R<i class="fa fa-sm fa-long-arrow-right"></i>F</strong>.</span>
      </li>
      <li>
        <div>
          <span>Départ</span>
          <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/cubes/moyen-cube-fait.svg" width="159" height="159" alt="moyen-cube-fait">
        </div>
        <i class="super-i fa fa-3x fa-long-arrow-right"></i>
        <div>
          <span>Arrivée</span>
          <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/cubes/moyen-cube-fait-L->F.svg" width="159" height="159" alt="moyen-cube-fait-L->F">
        </div>
        <span>La face de gauche passe à la place de la face de devant. On le note <strong>L<i class="fa fa-sm fa-long-arrow-right"></i>F</strong>.</span>
      </li>
      <li>
        <div>
          <span>Départ</span>
          <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/cubes/moyen-cube-fait.svg" width="159" height="159" alt="moyen-cube-fait">
        </div>
        <i class="super-i fa fa-3x fa-long-arrow-right"></i>
        <div>
          <span>Arrivée</span>
          <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/cubes/moyen-cube-fait-U->F.svg" width="159" height="159" alt="moyen-cube-fait-U->F">
        </div>
        <span>La face du haut passe à la place de la face de devant. On le note <strong>U<i class="fa fa-sm fa-long-arrow-right"></i>F</strong>.</span>
      </li>
      <li>
        <div>
          <span>Départ</span>
          <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/cubes/moyen-cube-fait.svg" width="159" height="159" alt="moyen-cube-fait">
        </div>
        <i class="super-i fa fa-3x fa-long-arrow-right"></i>
        <div>
          <span>Arrivée</span>
          <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/cubes/moyen-cube-fait-D->F.svg" width="159" height="159" alt="moyen-cube-fait-D->F">
        </div>
        <span>La face du bas passe à la place de la face de devant. On le note <strong>D<i class="fa fa-sm fa-long-arrow-right"></i>F</strong>.</span>
      </li>
      <li>
        <div>
          <span>Départ</span>
          <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/cubes/moyen-cube-fait.svg" width="159" height="159" alt="moyen-cube-fait">
        </div>
        <i class="super-i fa fa-3x fa-long-arrow-right"></i>
        <div>
          <span>Arrivée</span>
          <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/cubes/moyen-cube-fait-R->U.svg" width="159" height="159" alt="moyen-cube-fait-R->U">
        </div>
        <span>La face de droite passe à la place de la face du haut. On le note <strong>R<i class="fa fa-sm fa-long-arrow-right"></i>U</strong>.</span>
      </li>
      <li>
        <div>
          <span>Départ</span>
          <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/cubes/moyen-cube-fait.svg" width="159" height="159" alt="moyen-cube-fait">
        </div>
        <i class="super-i fa fa-3x fa-long-arrow-right"></i>
        <div>
          <span>Arrivée</span>
          <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/cubes/moyen-cube-fait-L->U.svg" width="159" height="159" alt="moyen-cube-fait-L->U">
        </div>
        <span>La face de gauche passe à la place de la face du haut. On le note <strong>L<i class="fa fa-sm fa-long-arrow-right"></i>U</strong>.</span>
      </li>
    </ul>

    <p>Maintenant que vous pouvez lire tous les algorithmes de la méthode, il ne reste plus qu'à les apprendre !<br>
    <br>
    Si vous avez du mal avec la mémorisation des algorithmes (voir suite) je vous conseil de regarder mes astuces de mémorisation mais vous n'en avez pas besoin pour comprendre comment utiliser la méthode.</p>

    </div>
</section>

<section id="advice">
  <div class="container">
    <h2>Méthode Fridrich : Astuces et conseils d'apprentissage</h2>
    <blockquote>L'apprentissage des algorithmes demande beaucoup de temps et une pratique <strong>régulière</strong> afin de ne pas les oublier. Il n'existe pas de technique miracle pour apprendre les formules, si vous avez déjà votre méthode d'apprentissage mes conseils ne devraient pas beaucoup vous aider. Je ne suis pas expert en méthodes d'apprentissage mais je peux vous expliquer celle que j'ai trouvée. L'idée est de repérer les mouvements de base afin de décomposer les algorithmes "complexes" (plus de 4 mouvements) en une suite de quelques mouvements de base (de 2 à 4 mouvements).</blockquote>

    <p>Pour commencer il faut expliquer ce que j'appelle un mouvement de base. Lorsqu'on regarde des algorithmes, on peut les regrouper en plusieurs suites de mouvements très similaires du type <span class="color-blue">M1 M2 M1' M2'</span> qui permet de faire l'<span class="color-blue">action</span> de l'algorithme, combiné avec des suites de <span class="color-green">transition</span> comme <span class="color-green">M1 M2</span> ou <span class="color-green">M1 M2 M1'</span> qui permettent de se placer en position d'<span class="color-blue">action</span>.<br>
    Dans presque la totalité des cas, M1 et M2 appartiennent à des faces consécutives par exemple R U, D F, L B... Il est donc très rare d'avoir L R, U D ou F B.</p>

    <p>Pour vous montrer le fonctionnement de cette technique nous allons utiliser l'algorithme suivant.<br>
    <br>
    <span class="color-blue">R U R' U'</span> / <span class="color-green">R' F</span> / <span class="color-green">R2 U'</span> / <span class="color-blue">R' U' R U</span> / <span class="color-green">R' F'</span><br>
    <br>
    Ici le vert (gras) représente les suites de transition et le bleu les suites d'action. Il peut y avoir plusieurs façon de découper l'algorithme, je trouve que celle-ci représente bien son fonctionnement.<br>
    <span class="color-blue">R U R' U'</span> est l'une des suites des plus utilisées et on peut voir les formes de transition <span class="color-green">M1 M2</span> / <span class="color-green">M1 M2'</span> avec <span class="color-green">R' F</span> / <span class="color-green">R' F'</span> qui est facilement mémorisable. Une fois qu'on a mémorisé les emplacements des suites d'action, très répétitives, et l'emplacement avec la logique des transitions, on peut facilement se souvenir d'un algorithme.<br>
    <br>
    Cet exemple était assez complexe donc je vous propose un exemple plus simple.<br>
    <br>
    <span class="color-green">F</span> / <span class="color-blue">R U R' U'</span> / <span class="color-green">F'</span> - ou encore - <span class="color-green">R U</span> / <span class="color-blue">U R' U' R</span> / <span class="color-green">U' R'</span><br>
    <br>
    Dans ces deux cas on voit beaucoup plus la transition au début et à la fin ainsi que la suite d'action au centre. De plus les transitions sont parfaitement symétriques en étant sous la forme <span class="color-green">M1</span> / <span class="color-green">M1'</span> et <span class="color-green">M1 M2</span> / <span class="color-green">M2' M1'</span>.</p>

    </div>
</section>

<section id="F2L">
  <div class="container">
    <h2>Méthode Fridrich : Les 41 F2L (First Two Layers)</h2>

    <div class="cube-categories">
      <div class="cube-categorie">
        <h3>Cubes en position, mal orientés</h3>
        <ul class="cube-algos">
          <li>
            <div>
              <span>1</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-1.svg" width="221" height="107" alt="F2L-1-bas">
            </div>
            <span>L2 U2 L U L' U L U2 L</span>
          </li>
          <li>
            <div>
              <span>2</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-2.svg" width="221" height="107" alt="F2L-2-bas">
            </div>
            <span>L' U2 L' U' L U' L' U2 L2</span>
          </li>
          <li>
            <div>
              <span>3</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-3.svg" width="221" height="107" alt="F2L-3-bas">
            </div>
            <span>R U' R U B U' B' R2</span>
          </li>
          <li>
            <div>
              <span>4</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-4.svg" width="221" height="107" alt="F2L-4-bas">
            </div>
            <span>L' U L' U' B' U B L2</span>
          </li>
          <li>
            <div>
              <span>5</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-5.svg" width="221" height="107" alt="F2L-5-bas">
            </div>
            <span>R U R' U2 R U2 R' U F' U' F</span>
          </li>
          <li>
            <div>
              <span>6</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-6.svg" width="347" height="107" alt="F2L-6-bas">
            </div>
            <span>U' L' U L d R U' R'</span>
          </li>
        </ul>
      </div>

      <div class="cube-categorie">
        <h3>Coin en position, pas l'arête</h3>
        <ul class="cube-algos">
          <li>
            <div>
              <span>7</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-7.svg" width="347" height="107" alt="F2L-7-bas">
            </div>
            <span>U R U' R' d' L' U L</span>
          </li>
          <li>
            <div>
              <span>8</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-8.svg" width="347" height="107" alt="F2L-8-bas">
            </div>
            <span>L' U L U' L' U L</span>
          </li>
          <li>
            <div>
              <span>9</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-9.svg" width="347" height="107" alt="F2L-9-bas">
            </div>
            <span>R U R' U' R U R'</span>
          </li>
          <li>
            <div>
              <span>10</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-10.svg" width="347" height="107" alt="F2L-10-bas">
            </div>
            <span>L' U' L U L' U' L</span>
          </li>
          <li>
            <div>
              <span>11</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-11.svg" width="347" height="107" alt="F2L-11-bas">
            </div>
            <span>R U' R' U R U' R'</span>
          </li>
        </ul>
      </div>

      <div class="cube-categorie">
        <h3>Arête en position, pas le coin</h3>
        <ul class="cube-algos">
          <li>
            <div>
              <span>12</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-12.svg" width="347" height="107" alt="F2L-12-bas">
            </div>
            <span>R2 U R2 U R2 U2 R2</span>
          </li>
          <li>
            <div>
              <span>13</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-13.svg" width="347" height="107" alt="F2L-13-bas">
            </div>
            <span>U L' U L U2 L' U L</span>
          </li>
          <li>
            <div>
              <span>14</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-14.svg" width="347" height="107" alt="F2L-14-bas">
            </div>
            <span>U' R U' R' U2 R U' R'</span>
          </li>
          <li>
            <div>
              <span>15</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-15.svg" width="347" height="107" alt="F2L-15-bas">
            </div>
            <span>U L' U' L U' F U F'</span>
          </li>
          <li>
            <div>
              <span>16</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-16.svg" width="347" height="107" alt="F2L-16-bas">
            </div>
            <span>U' R U R' d R' U' R</span>
          </li>
          <li>
            <div>
              <span>17</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-17.svg" width="347" height="107" alt="F2L-17-bas">
            </div>
            <span>F' U F R U2 R'</span>
          </li>
        </ul>
      </div>

      <div class="cube-categorie">
        <h3>Cubes à droite, accolés</h3>
        <ul class="cube-algos">
          <li>
            <div>
              <span>18</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-18.svg" width="347" height="107" alt="F2L-18-bas">
            </div>
            <span>R U2 R' U' R U R'</span>
          </li>
          <li>
            <div>
              <span>19</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-19.svg" width="347" height="107" alt="F2L-19-bas">
            </div>
            <span>U R U' R'</span>
          </li>
          <li>
            <div>
              <span>20</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-20.svg" width="347" height="107" alt="F2L-20-bas">
            </div>
            <span>U' R U' R' U R U R'</span>
          </li>
          <li>
            <div>
              <span>21</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-21.svg" width="347" height="107" alt="F2L-21-bas">
            </div>
            <span>U2 L2 U2 L U L' U L2</span>
          </li>
          <li>
            <div>
              <span>22</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-22.svg" width="347" height="107" alt="F2L-22-bas">
            </div>
            <span>U' R U2 R' U F' U' F</span>
          </li>
          <li>
            <div>
              <span>23</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-23.svg" width="347" height="107" alt="F2L-23-bas">
            </div>
            <span>R U' R' U2 F' U' F</span>
          </li>
          <li>
            <div>
              <span>24</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-24.svg" width="347" height="107" alt="F2L-24-bas">
            </div>
            <span>U L' U L U' L' U' L</span>
          </li>
          <li>
            <div>
              <span>25</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-25.svg" width="347" height="107" alt="F2L-25-bas">
            </div>
            <span>U' L' U L</span>
          </li>
          <li>
            <div>
              <span>26</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-26.svg" width="347" height="107" alt="F2L-26-bas">
            </div>
            <span>L' U2 L U L' U' L</span>
          </li>
          <li>
            <div>
              <span>27</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-27.svg" width="347" height="107" alt="F2L-27-bas">
            </div>
            <span>L' U L U2 F U F'</span>
          </li>
          <li>
            <div>
              <span>28</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-28.svg" width="347" height="107" alt="F2L-28-bas">
            </div>
            <span>U L' U2 L U' F U F'</span>
          </li>
          <li>
            <div>
              <span>29</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-29.svg" width="347" height="107" alt="F2L-29-bas">
            </div>
            <span>U2 R2 U2 R' U' R U' R2</span>
          </li>
        </ul>
      </div>

      <div class="cube-categorie">
        <h3>Cubes à droite, séparés</h3>
        <ul class="cube-algos">
          <li>
            <div>
              <span>30</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-30.svg" width="347" height="107" alt="F2L-30-bas">
            </div>
            <span>U2 L' U' L U' L' U L</span>
          </li>
          <li>
            <div>
              <span>31</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-31.svg" width="347" height="107" alt="F2L-31-bas">
            </div>
            <span>U R U2 R' U R U' R'</span>
          </li>
          <li>
            <div>
              <span>32</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-32.svg" width="347" height="107" alt="F2L-32-bas">
            </div>
            <span>U' L' U2 L U' L' U L</span>
          </li>
          <li>
            <div>
              <span>33</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-33.svg" width="347" height="107" alt="F2L-33-bas">
            </div>
            <span>U2 R U R' U R U' R'</span>
          </li>
          <li>
            <div>
              <span>34</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-34.svg" width="347" height="107" alt="F2L-34-bas">
            </div>
            <span>U L' U2 L U2 L' U L</span>
          </li>
          <li>
            <div>
              <span>35</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-35.svg" width="347" height="107" alt="F2L-35-bas">
            </div>
            <span>R U R'</span>
          </li>
          <li>
            <div>
              <span>36</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-36.svg" width="347" height="107" alt="F2L-36-bas">
            </div>
            <span>U L' U' L U2 L' U L</span>
          </li>
          <li>
            <div>
              <span>37</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-37.svg" width="347" height="107" alt="F2L-37-bas">
            </div>
            <span>U L' U L U' F U F'</span>
          </li>
          <li>
            <div>
              <span>38</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-38.svg" width="347" height="107" alt="F2L-38-bas">
            </div>
            <span>U' R U' R' U F' U' F</span>
          </li>
          <li>
            <div>
              <span>39</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-39.svg" width="347" height="107" alt="F2L-39-bas">
            </div>
            <span>U' R U R' U2 R U' R'</span>
          </li>
          <li>
            <div>
              <span>40</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-40.svg" width="347" height="107" alt="F2L-40-bas">
            </div>
            <span>U' R U2 R' U2 R U' R'</span>
          </li>
          <li>
            <div>
              <span>41</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/F2L/F2L-41.svg" width="347" height="107" alt="F2L-41-bas">
            </div>
            <span>L' U' L</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section id="OLL">
  <div class="container">
    <h2>Méthode Fridrich : Les 57 OLL (Orientation Last Layer)</h2>

    <div class="cube-categories">
      <div class="cube-categorie">
        <h3>Les carrés</h3>
        <ul class="cube-algos">
          <li>
            <div>
              <span>1</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-1.svg" width="74" height="74" alt="OLL-1">
            </div>
            <span>r U2 R' U' R U' r'</span>
          </li>
          <li>
            <div>
              <span>2</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-2.svg" width="74" height="74" alt="OLL-2">
            </div>
            <span>l' U2' L U L' U l</span>
          </li>
        </ul>
      </div>

      <div class="cube-categorie">
        <h3>Les "W"</h3>
        <ul class="cube-algos">
          <li>
            <div>
              <span>3</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-3.svg" width="74" height="74" alt="OLL-3">
            </div>
            <span>R U R' U R U' R' U' l' U R U'</span>
          </li>
          <li>
            <div>
              <span>4</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-4.svg" width="74" height="74" alt="OLL-4">
            </div>
            <span>R' U' R U' R' U R U l U' R' U</span>
          </li>
        </ul>
      </div>

      <div class="cube-categorie">
        <h3>Les "S"</h3>
        <ul class="cube-algos">
          <li>
            <div>
              <span>5</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-5.svg" width="74" height="74" alt="OLL-5">
            </div>
            <span>R' F R U R' U' F' U R</span>
          </li>
          <li>
            <div>
              <span>6</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-6.svg" width="74" height="74" alt="OLL-6">
            </div>
            <span>L F' L' U' L U F U' L'</span>
          </li>
        </ul>
      </div>

      <div class="cube-categorie">
        <h3>Les "C"</h3>
        <ul class="cube-algos">
          <li>
            <div>
              <span>7</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-7.svg" width="74" height="74" alt="OLL-7">
            </div>
            <span>R' U' R' F R F' U R</span>
          </li>
          <li>
            <div>
              <span>8</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-8.svg" width="74" height="74" alt="OLL-8">
            </div>
            <span>R U R' U' B' R' F R F' B</span>
          </li>
        </ul>
      </div>

      <div class="cube-categorie">
        <h3>Les "T"</h3>
        <ul class="cube-algos">
          <li>
            <div>
              <span>9</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-9.svg" width="74" height="74" alt="OLL-9">
            </div>
            <span>F R U R' U' F'</span>
          </li>
          <li>
            <div>
              <span>10</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-10.svg" width="74" height="74" alt="OLL-10">
            </div>
            <span>R U R' U' l' U R U'</span>
          </li>
        </ul>
      </div>

      <div class="cube-categorie">
        <h3>Les éclairs</h3>
        <ul class="cube-algos">
          <li>
            <div>
              <span>11</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-11.svg" width="74" height="74" alt="OLL-11">
            </div>
            <span>r U R' U R U2 r'</span>
          </li>
          <li>
            <div>
              <span>12</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-12.svg" width="74" height="74" alt="OLL-12">
            </div>
            <span>l' U' L U' L' U2 l</span>
          </li>
          <li>
            <div>
              <span>13</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-13.svg" width="74" height="74" alt="OLL-13">
            </div>
            <span>r R2 U' R U' R' U2 R U' M</span>
          </li>
          <li>
            <div>
              <span>14</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-14.svg" width="74" height="74" alt="OLL-14">
            </div>
            <span>r' R2 U R' U R U2 R' U M'</span>
          </li>
        </ul>
      </div>

      <div class="cube-categorie">
        <h3>Les flèches</h3>
        <ul class="cube-algos">
          <li>
            <div>
              <span>15</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-15.svg" width="74" height="74" alt="OLL-15">
            </div>
            <span>R' F R F' d' L' U L</span>
          </li>
          <li>
            <div>
              <span>16</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-16.svg" width="74" height="74" alt="OLL-16">
            </div>
            <span>R' U2 l R U' R' U l' U2 R</span>
          </li>
          <li>
            <div>
              <span>17</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-17.svg" width="74" height="74" alt="OLL-17">
            </div>
            <span>R' U' R L<i class="fa fa-sm fa-long-arrow-right"></i>F U<i class="fa fa-sm fa-long-arrow-right"></i>F R U' R' F R U R'</span>
          </li>
          <li>
            <div>
              <span>18</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-18.svg" width="74" height="74" alt="OLL-18">
            </div>
            <span>R U R' D<i class="fa fa-sm fa-long-arrow-right"></i>F R<i class="fa fa-sm fa-long-arrow-right"></i>U R' U R B' R' U' R</span>
          </li>
        </ul>
      </div>

      <div class="cube-categorie">
        <h3>Les "P"</h3>
        <ul class="cube-algos">
          <li>
            <div>
              <span>19</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-19.svg" width="74" height="74" alt="OLL-19">
            </div>
            <span>F' L F L' U' L' U' L U L' U L</span>
          </li>
          <li>
            <div>
              <span>20</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-20.svg" width="74" height="74" alt="OLL-20">
            </div>
            <span>F R' F' R U R U R' U' R U' R'</span>
          </li>
          <li>
            <div>
              <span>21</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-21.svg" width="74" height="74" alt="OLL-21">
            </div>
            <span>F U R U' R' F'</span>
          </li>
          <li>
            <div>
              <span>22</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-22.svg" width="74" height="74" alt="OLL-22">
            </div>
            <span>F' U' L' U L F</span>
          </li>
        </ul>
      </div>

      <div class="cube-categorie">
        <h3>Les figures étranges</h3>
        <ul class="cube-algos">
          <li>
            <div>
              <span>23</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-23.svg" width="74" height="74" alt="OLL-23">
            </div>
            <span>B' R B' R2 U R U R' U' l U2</span>
          </li>
          <li>
            <div>
              <span>24</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-24.svg" width="74" height="74" alt="OLL-24">
            </div>
            <span>R2 U R' B' R U' R2 U l U l'</span>
          </li>
          <li>
            <div>
              <span>25</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-25.svg" width="74" height="74" alt="OLL-25">
            </div>
            <span>R U2 R' U' R U' R2 R<i class="fa fa-sm fa-long-arrow-right"></i>F L' U' L U F</span>
          </li>
          <li>
            <div>
              <span>26</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-26.svg" width="74" height="74" alt="OLL-26">
            </div>
            <span>L' U2 L U L' U L2 L<i class="fa fa-sm fa-long-arrow-right"></i>F R U R' U' F'</span>
          </li>
        </ul>
      </div>

      <div class="cube-categorie">
        <h3>Les lignes</h3>
        <ul class="cube-algos">
          <li>
            <div>
              <span>27</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-27.svg" width="74" height="74" alt="OLL-27">
            </div>
            <span>R' U2 R2 U R' U R U2 B' R' B</span>
          </li>
          <li>
            <div>
              <span>28</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-28.svg" width="74" height="74" alt="OLL-28">
            </div>
            <span>L' B' L U' R' U R U' R' U R L' B L</span>
          </li>
          <li>
            <div>
              <span>29</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-29.svg" width="74" height="74" alt="OLL-29">
            </div>
            <span>F U R U' R' U R U' R' F'</span>
          </li>
          <li>
            <div>
              <span>30</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-30.svg" width="74" height="74" alt="OLL-30">
            </div>
            <span>R U R' U R d' R U' R' F'</span>
          </li>
        </ul>
      </div>

      <div class="cube-categorie">
        <h3>Les "L"</h3>
        <ul class="cube-algos">
          <li>
            <div>
              <span>31</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-31.svg" width="74" height="74" alt="OLL-31">
            </div>
            <span>R' F R U l' U' l L<i class="fa fa-sm fa-long-arrow-right"></i>F R U' R'</span>
          </li>
          <li>
            <div>
              <span>32</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-32.svg" width="74" height="74" alt="OLL-32">
            </div>
            <span>L F' L' U' r U r' R<i class="fa fa-sm fa-long-arrow-right"></i>F L' U L</span>
          </li>
          <li>
            <div>
              <span>33</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-33.svg" width="74" height="74" alt="OLL-33">
            </div>
            <span>L' B' L R' U' R U L' B L</span>
          </li>
          <li>
            <div>
              <span>34</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-34.svg" width="74" height="74" alt="OLL-34">
            </div>
            <span>R B R' L U L' U' R B' R'</span>
          </li>
        </ul>
      </div>

      <div class="cube-categorie">
        <h3>Les coins</h3>
        <ul class="cube-algos">
          <li>
            <div>
              <span>35</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-35.svg" width="74" height="74" alt="OLL-35">
            </div>
            <span>F R U R' U' R U R' U' F'</span>
          </li>
          <li>
            <div>
              <span>36</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-36.svg" width="74" height="74" alt="OLL-36">
            </div>
            <span>F' L' U' L U L' U' L U F</span>
          </li>
          <li>
            <div>
              <span>37</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-37.svg" width="74" height="74" alt="OLL-37">
            </div>
            <span>l' U R' U' l R U2 B' R B R'</span>
          </li>
          <li>
            <div>
              <span>38</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-38.svg" width="74" height="74" alt="OLL-38">
            </div>
            <span>r U' L U r' L' U2 B L' B' L</span>
          </li>
          <li>
            <div>
              <span>39</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-39.svg" width="74" height="74" alt="OLL-39">
            </div>
            <span>r U R' U R U' R' U R U2 r'</span>
          </li>
          <li>
            <div>
              <span>40</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-40.svg" width="74" height="74" alt="OLL-40">
            </div>
            <span>l' U' L U' L' U L U' L' U2 l</span>
          </li>
        </ul>
      </div>

      <div class="cube-categorie">
        <h3>Tous les coins bien orientés</h3>
        <ul class="cube-algos">
          <li>
            <div>
              <span>41</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-41.svg" width="74" height="74" alt="OLL-41">
            </div>
            <span>R U R' U' M' U R U' r'</span>
          </li>
          <li>
            <div>
              <span>42</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-42.svg" width="74" height="74" alt="OLL-42">
            </div>
            <span>r U R' U' M U R U' R'</span>
          </li>
          <li>
            <div>
              <span>43</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-43.svg" width="74" height="74" alt="OLL-43">
            </div>
            <span>M U R U R' U' M2 U R U' r'</span>
          </li>
        </ul>
      </div>

      <div class="cube-categorie">
        <h3>Aucune arête bien orientée</h3>
        <ul class="cube-algos">
          <li>
            <div>
              <span>44</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-44.svg" width="74" height="74" alt="OLL-44">
            </div>
            <span>R U2 R2 F R F' U2 R' F R F'</span>
          </li>
          <li>
            <div>
              <span>45</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-45.svg" width="74" height="74" alt="OLL-45">
            </div>
            <span>M U R U R' U' r R2 F R F'</span>
          </li>
          <li>
            <div>
              <span>46</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-46.svg" width="74" height="74" alt="OLL-46">
            </div>
            <span>F R U R' U L<i class="fa fa-sm fa-long-arrow-right"></i>F R' U2 R' F R F'</span>
          </li>
          <li>
            <div>
              <span>47</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-47.svg" width="74" height="74" alt="OLL-47">
            </div>
            <span>M U' r U2 r' U' R U' r R2</span>
          </li>
          <li>
            <div>
              <span>48</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-48.svg" width="74" height="74" alt="OLL-48">
            </div>
            <span>M' U r' U2 r U R' U r' R2</span>
          </li>
          <li>
            <div>
              <span>49</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-49.svg" width="74" height="74" alt="OLL-49">
            </div>
            <span>R U R' U R' F R F' U2 R' F R F'</span>
          </li>
          <li>
            <div>
              <span>50</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-50.svg" width="74" height="74" alt="OLL-50">
            </div>
            <span>D<i class="fa fa-sm fa-long-arrow-right"></i>F U R' U' l U R2 B' R' B U' R'</span>
          </li>
        </ul>
      </div>

      <div class="cube-categorie">
        <h3>Toutes les arêtes bien orientées</h3>
        <ul class="cube-algos">
          <li>
            <div>
              <span>51</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-51.svg" width="74" height="74" alt="OLL-51">
            </div>
            <span>
              U2 R U2 R D R' U2 R D' R2
              <div class="tooltip">
                <i class="ml-4 fa fa-1x fa-question-circle"></i>
                <span>Vous avez le choix entre plusieurs algorithmes</span>
              </div><br>
              R U2 R' U' R U R' U' R U R' U' R U' R'
            </span>
          </li>
          <li>
            <div>
              <span>52</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-52.svg" width="74" height="74" alt="OLL-52">
            </div>
            <span>l' U' L U R U' L' U</span>
          </li>
          <li>
            <div>
              <span>53</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-53.svg" width="74" height="74" alt="OLL-53">
            </div>
            <span>R2 D R' U2 R D' R' U2 R'</span>
          </li>
          <li>
            <div>
              <span>54</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-54.svg" width="74" height="74" alt="OLL-54">
            </div>
            <span>L' U2 L U L' U L</span>
          </li>
          <li>
            <div>
              <span>55</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-55.svg" width="74" height="74" alt="OLL-55">
            </div>
            <span>R U2 R' U' R U' R'</span>
          </li>
          <li>
            <div>
              <span>56</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-56.svg" width="74" height="74" alt="OLL-56">
            </div>
            <span>R U R' U R U' R' U R U2 R'</span>
          </li>
          <li>
            <div>
              <span>57</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/OLL/OLL-57.svg" width="74" height="74" alt="OLL-57">
            </div>
            <span>R U2 R2 U' R2 U' R2 U2 R</span>
          </li>
        </ul>
      </div>
    </div>

    <p>Si vous n'avez pas le courage de tout apprendre du premier coup vous pouvez faire cette étape en <strong>plusieurs fois</strong>. En apprenant les algorithmes <strong>9, 21</strong> et <strong>de 51 à 57</strong> vous pouvez réaliser les OLL en 3 étapes maximum.<br>
    Dans tous les cas, il faut commencer par faire une <span class="color-blue">croix</span> à l'aide des algorithmes <span class="color-blue">9 et 21</span>. Pour ça il ne faut s'intéresser qu'aux <span class="color-blue">arêtes</span> puis une fois la croix faite, il faut utiliser les algorithmes <span class="color-green">51 à 57</span> pour finir l'étape.<br>
    Dans les cas les plus complexes, de 44 à 50, il suffit de faire les algorithmes <span class="color-blue">21 + U + 9</span> et vous arrivez dans l'un des cas <span class="color-green">51 à 57</span>. Pour les autres cas il suffit d'utiliser soit l'algorithme <span class="color-blue">9</span> soit le <span class="color-blue">21</span> pour être dans les cas <span class="color-green">51 à 57</span>.<br>
    Vous pouvez donc commencer par apprendre ces 9 algorithmes avant d'apprendre les autres.</p>

    </div>
</section>

<section id="PLL">
  <div class="container">
    <h2>Méthode Fridrich : Les 21 PLL (Permutation Last Layer)</h2>

    <div class="cube-categories">
      <div class="cube-categorie">
        <h3>Permutation des arêtes</h3>
        <ul class="cube-algos">
          <li>
            <div>
              <span>1</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/PLL/PLL-1.svg" width="74" height="74" alt="PLL-1">
            </div>
            <span>R' U R' U' R' U' R' U R U R2</span>
          </li>
          <li>
            <div>
              <span>2</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/PLL/PLL-2.svg" width="74" height="74" alt="PLL-2">
            </div>
            <span>R2 U' R' U' R U R U R U' R</span>
          </li>
          <li>
            <div>
              <span>3</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/PLL/PLL-3.svg" width="74" height="74" alt="PLL-3">
            </div>
            <span>U M2 U' M2 U' M' U2 M2 U2 M' U</span>
          </li>
          <li>
            <div>
              <span>4</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/PLL/PLL-4.svg" width="74" height="74" alt="PLL-4">
            </div>
            <span>M2 U M2 U2 M2 U M2</span>
          </li>
        </ul>
      </div>

      <div class="cube-categorie">
        <h3>Permutation des coins</h3>
        <ul class="cube-algos">
          <li>
            <div>
              <span>5</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/PLL/PLL-5.svg" width="74" height="74" alt="PLL-5">
            </div>
            <span>D<i class="fa fa-sm fa-long-arrow-right"></i>F R2 D2 R U R' D2 R U' R</span>
          </li>
          <li>
            <div>
              <span>6</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/PLL/PLL-6.svg" width="74" height="74" alt="PLL-6">
            </div>
            <span>U<i class="fa fa-sm fa-long-arrow-right"></i>F R2 D2 R' U' R D2 R' U R'</span>
          </li>
          <li>
            <div>
              <span>7</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/PLL/PLL-7.svg" width="74" height="74" alt="PLL-7">
            </div>
            <span>
              U<i class="fa fa-sm fa-long-arrow-right"></i>F U D R D' L D R' U' D' R U L' U' R'
              <div class="test">
                <i class="ml-4 fa fa-1x fa-question-circle"></i>
                <span>Vous avez le choix entre plusieurs algorithmes</span>
              </div><br>
              D<i class="fa fa-sm fa-long-arrow-right"></i>F U R' U' L U R U' r2 U' R U L U' R' U<br>
              l' U' L' U R U' L U R' U' L U R U' L' U
            <span>
          </li>
        </ul>
      </div>

      <div class="cube-categorie">
        <h3>Permutation des arêtes et des coins</h3>
          <ul class="cube-algos">
          <li>
            <div>
              <span>8</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/PLL/PLL-8.svg" width="74" height="74" alt="PLL-8">
            </div>
            <span>R U R' U' R' F R2 U' R' U' R U R' F'</span>
          </li>
          <li>
            <div>
              <span>9</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/PLL/PLL-9.svg" width="74" height="74" alt="PLL-9">
            </div>
            <span>R' U' F' R U R' U' R' F R2 U' R' U' R U R' U R</span>
          </li>
          <li>
            <div>
              <span>10</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/PLL/PLL-10.svg" width="74" height="74" alt="PLL-10">
            </div>
            <span>R' U2 R U2 R' F R U R' U' R' F' R2 U'</span>
          </li>
          <li>
            <div>
              <span>11</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/PLL/PLL-11.svg" width="74" height="74" alt="PLL-11">
            </div>
            <span>R U2 R' U2 R B' R' U' R U l U R2 F</span>
          </li>
          <li>
            <div>
              <span>12</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/PLL/PLL-12.svg" width="74" height="74" alt="PLL-12">
            </div>
            <span>R U R' F' R U R' U' R' F R2 U' R' U'</span>
          </li>
          <li>
            <div>
              <span>13</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/PLL/PLL-13.svg" width="74" height="74" alt="PLL-13">
            </div>
            <span>
              R' U2 R U R' d2 R U' L U R'
              <div class="test">
                <i class="ml-4 fa fa-1x fa-question-circle"></i>
                <span>Vous avez le choix entre plusieurs algorithmes</span>
              </div><br>
              R<i class="fa fa-sm fa-long-arrow-right"></i>F R<i class="fa fa-sm fa-long-arrow-right"></i>F L' U' L F L' U' L U L F' L2 U L U
            </span>
          </li>
          <li>
            <div>
              <span>14</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/PLL/PLL-14.svg" width="74" height="74" alt="PLL-14">
            </div>
            <span>F R U' R' U' R U R' F' R U R' U' R' F R F'</span>
          </li>
          <li>
            <div>
              <span>15</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/PLL/PLL-15.svg" width="74" height="74" alt="PLL-15">
            </div>
            <span>U R2 U2 F2 U' R2 U2 R2 F2 U' F2 U2 F2 R2</span>
          </li>
          <li>
            <div>
              <span>16</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/PLL/PLL-16.svg" width="74" height="74" alt="PLL-16">
            </div>
            <span>U' R2 U2 B2 U R2 U2 R2 B2 U B2 U2 B2 R2</span>
          </li>
          <li>
            <div>
              <span>17</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/PLL/PLL-17.svg" width="74" height="74" alt="PLL-17">
            </div>
            <span>R' U R' U' B' R' B2 U' B' U B' R B R</span>
          </li>
          <li>
            <div>
              <span>18</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/PLL/PLL-18.svg" width="74" height="74" alt="PLL-18">
            </div>
            <span>R2 u' R U' R U R' u R2 B U' B'</span>
          </li>
          <li>
            <div>
              <span>19</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/PLL/PLL-19.svg" width="74" height="74" alt="PLL-19">
            </div>
            <span>R' U' R R<i class="fa fa-sm fa-long-arrow-right"></i>F R2 u R' U R U' R u' R2</span>
          </li>
          <li>
            <div>
              <span>20</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/PLL/PLL-20.svg" width="74" height="74" alt="PLL-20">
            </div>
            <span>R2 u R' U R' U' R u' R2 F' U F</span>
          </li>
          <li>
            <div>
              <span>21</span>
              <img src="images/blank.gif" class="lazy" data-src="<?= $adresse ?>/images/svg/PLL/PLL-21.svg" width="74" height="74" alt="PLL-21">
            </div>
            <span>R U R' L<i class="fa fa-sm fa-long-arrow-right"></i>F R2 u' R U' R' U R' u R2</span>
          </li>
        </ul>
      </div>
    </div>

    <p>Tout comme les OLL vous n'êtes pas obligés de tout apprendre. En apprenant les algorithmes <strong>1, 2</strong> et <strong>de 4 à 8</strong> vous pouvez terminer le cube en 2 étapes maximum.<br>
    Dans tous les cas, il faut commencer par <span class="color-blue">placer les arêtes</span> en bonne position à l'aide des algorithmes <span class="color-blue">1, 2 et 8</span> puis <span class="color-green">placer les coins</span> avec les algorithmes <span class="color-green">4 à 7</span>.<br>
    Pour commencer on ne s'occupe pas des coins et il ne faut pas hésiter à <span class="color-blue">tourner la face du haut</span>. S'il y a deux arêtes opposés alors il faut faire l'algorithme 8. Sinon il faut tourner la face jusqu'à n'avoir qu'une arête bien placée puis faire l'algorithme 1 ou 2 selon le cas. Cela permet de se mettre dans l'un des cas <span class="color-green">4 à 7</span>. Il ne reste plus qu'à faire l'algorithme et le cube est résolu.</p>

    <div class="mt-10">
      <a id="scrollTop" href="javascript:void(0)"><i class="mr-2 fa fa-arrow-up fa-lg"></i>Revenir en haut de la page</a>
    </div>
  </div>
</section>
<?php

require_once("footer.php");
