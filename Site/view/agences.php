<?php
/**
 * Revision-151 - agences.php
 * User: Jan.BLATTER
 * Date: 12.06.2020
 */

ob_start(); //ouvre la mémoire tampon
?>

<?php if (isset($_SESSION['client'])) :?>

    <h2> Liste des Agences </h2>



    <form class="form" method="POST" action="index.php?action=AgenciesAdd">
        <br>
        <h2> Ajouter un agent </h2>
        <input  type="text" name="id" value="" placeholder="entrer un id" required>
        <b>Nom:</b><br>
        <input  type="text" name="nom" value="" placeholder="entrer un nom" required>
        <br>
        <b>Ville:</b><br>
        <input type="text" name="ville" value="" placeholder="entrer une ville" required>
        <br>
        <input type="submit" value=" Confirmer">
    </form>


    <?php foreach ($AgenciesResults as $result) : ?>

        <li>
            <div>
                <p><strong>ID : </strong><?= $result['id']; ?></p>
                <p><strong>Noms : </strong><?= $result['name']; ?></p>
                <p><strong>Ville : </strong><?= $result['city']; ?></p>
                <p><strong>Statut : </strong><?= $result['active']; ?> cm</p>
                <a href="index.php?action=AgentsDelete&id=<?= $result['id']; ?>">Supprimer</a>
                <a href="index.php?action=AgentsModify&id=<?= $result['id']; ?>">Modifier</a>



            </div>

        </li>


    <?php endforeach ?>




<?php endif;?>
<?php
$contenu = ob_get_clean(); //efface la mémoire tampon dans la variable $content
require "view/gabarit.php";  //Appele le fichier. gabarit.php est requis pour que ça marche.