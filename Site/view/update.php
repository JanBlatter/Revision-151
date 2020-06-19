<?php

/**
 * Revision-151 - update.php
 * User: Jan.BLATTER
 * Date: 19.06.2020
 */
ob_start(); //ouvre la mémoire tampon
?>




<form class="form" method="POST" action="index.php?action=CustomersModify&id=<?=$customer[0]['id'] ?>">
    <br>
    <h2> Modifier un client </h2>
    <b>Nom:</b><br>
    <input  type="text" name="nomUpdate" value="<?= $customer[0]['name'] ?>" placeholder="entrer un nom" required>
    <br>
    <b>Prénom:</b><br>
    <input type="text" name="prenomUpdate" value="<?= $customer[0]['surname'] ?>" placeholder="entrer un prénom" required>
    <br>

    <input type="submit" value=" Confirmer">
</form>


<?php
$contenu = ob_get_clean(); //efface la mémoire tampon dans la variable $content
require "view/gabarit.php";  //Appele le fichier. gabarit.php est requis pour que ça marche.