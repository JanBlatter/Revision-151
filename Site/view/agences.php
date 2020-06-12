<?php
/**
 * Revision-151 - agences.php
 * User: Jan.BLATTER
 * Date: 12.06.2020
 */

ob_start(); //ouvre la mémoire tampon
?>

    <a> agences </a>


<?php
$contenu = ob_get_clean(); //efface la mémoire tampon dans la variable $content
require "view/gabarit.php";  //Appele le fichier. gabarit.php est requis pour que ça marche.