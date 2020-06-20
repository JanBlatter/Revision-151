<?php
/**
 * Revision-151 - clients.php
 * User: Jan.BLATTER
 * Date: 12.06.2020
 */

ob_start(); //ouvre la mémoire tampon
$rows = 0; // Column count
?>
<?php if (isset($_SESSION['client'])) :?>
    <h2> Liste des clients </h2>

     <form class="form" method="POST" action="index.php?action=CustomersAdd">
    <br>
    <h2> Ajouter un client </h2>
    <b>Nom:</b><br>
    <input  type="text" name="nom" value="" placeholder="entrer un nom" required>
    <br>
    <b>Prénom:</b><br>
    <input type="text" name="prénom" value="" placeholder="entrer un prénom" required>
    <br>
         <b>Ville:</b><br>
         <input type="text" name="ville" value="" placeholder="entrer une ville" required>
    <br>
    <input type="submit" value=" Confirmer">
</form>

<h2> Les clients </h2>

<?php foreach ($customersResults as $result) : ?>

    <li>
        <div>
            <p><strong>ID : </strong><?= $result['id']; ?></p>
            <p><strong>Noms : </strong><?= $result['name']; ?></p>
            <p><strong>Prénoms : </strong><?= $result['surname']; ?></p>
            <p><strong>Villes : </strong><?= $result['city']; ?> cm</p>
            <a href="index.php?action=CustomersDelete&id=<?= $result['id']; ?>">Supprimer</a>
            <a href="index.php?action=CustomersModify&id=<?= $result['id']; ?>">Modifier</a>

        </div>

    </li>


<?php endforeach ?>
<?php endif;?>

<?php
$contenu = ob_get_clean(); //efface la mémoire tampon dans la variable $content
require "view/gabarit.php";  //Appele le fichier. gabarit.php est requis pour que ça marche.