<?php
/**
 * 133-Start - customersDetails.php
 * User: Janbl
 * Date: 20.06.2020
 */

ob_start();
$titre = "Page détails du client";
?>
<?php foreach ($tableauCustomersDetails as $result) : ?>
    <h2>Client : <?= $result['name'] ?> <?= $result['surname'] ?> </h2>
    <h2>Ville : <?= $result['city'] ?></h2>

<?php endforeach ?>


    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Agences associées au client</th>
            <th scope="col">Soldes des comptes</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($tableauCustomersAttributes as $result) : ?>
            <tr>

                <td><?= $result['name'] ?></td>
                <td><?= $result['amount'] ?> CHF</td>

            </tr>
        <?php endforeach ?>
        </tbody>
        <tr>
            <th scope="col">Solde total</th>
            <td><?= $tableauTotalAmountCustomer?> CHF</td>
        </tr>
    </table>


<?php
$contenu = ob_get_clean();
require "gabarit.php";