
<?php

/**
 * Revision-151 - update.php
 * User: Jan.BLATTER
 * Date: 19.06.2020
 */
ob_start(); //ouvre la mémoire tampon
?>




    <form class="form" method="POST" action="index.php?action=AgentsModify&id=<?=$Agents[0]['id'] ?>">
        <br>
        <h2> Modifier un Agemt </h2>
        <b>Nom:</b><br>
        <input  type="text" name="nomUpdateAgent" value="<?= $Agents[0]['name'] ?>" placeholder="entrer un nom" required>

        <input type="submit" value=" Confirmer">
    </form>


<?php
$contenu = ob_get_clean(); //efface la mémoire tampon dans la variable $content
require "view/gabarit.php";  //Appele le fichier. gabarit.php est requis pour que ça marche.