<?php
/**
 * 133-Start - agentsDetails.php
 * User: Janbl
 * Date: 20.06.2020
 */

ob_start();
$titre = "Page détails du client";
?>
<?php foreach ($tableauAgenciesDetails as $result) : ?>
    <h2>Agence : <?= $result['name'] ?></h2>
<?php endforeach ?>


    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Soldes totales de l'agence</th>
            <th scope="col">Nom</th>
            <th scope="col">Ville</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($tableauAgenciesDetails as $result) : ?>
            <tr>
                <td><?=$tableauTotalAmount?></td>
                <td><?= $result['name'] ?></td>
                <td><?= $result['city'] ?></td>

            </tr>
        <?php endforeach ?>
        </tbody>

    </table>


<?php
$contenu = ob_get_clean();
require "gabarit.php";