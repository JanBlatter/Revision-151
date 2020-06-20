<?php
/**
 * Révision 151 - gabarit.php
 * User: Jan.BLATTER
 * Date: 12.06.2020
 */

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Bootstrap 4</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<h1>Banque</h1>
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <?php if (isset($_SESSION['client'])) :?>
    <li class="nav-item">
        <br><li>Connecté en tant que  gestionnaire :  <?php echo $_SESSION['client']?></li>
    </li>
    <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="/Site/index.php?action=home" role="tab"  aria-selected="true">Clients</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="/Site/index.php?action=agences" role="tab"  aria-selected="false">Agences</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="/Site/index.php?action=statistiques" role="tab" aria-selected="false">Statistiques</a>
    </li>
    <li class="nav-item">
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="/Site/index.php?action=clients" role="tab"  aria-selected="false">Clients</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="/Site/index.php?action=globales" role="tab"  aria-selected="false">Globales</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="/Site/index.php?action=logout" role="tab"  aria-selected="false">Logout</a>
        </li>
    <?php else:?>
    <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="/Site/index.php?action=login" role="tab"  aria-selected="true">Login</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="/Site/index.php?action=agences" role="tab"  aria-selected="false">Agences</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="/Site/index.php?action=statistiques" role="tab" aria-selected="false">Statistiques</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="/Site/index.php?action=agences" role="tab" aria-controls="contact" aria-selected="false">Agences</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="/Site/index.php?action=clients" role="tab"  aria-selected="false">Clients</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="/Site/index.php?action=globales" role="tab"  aria-selected="false">Globales</a>
    </li>

    <?php endif;?>
</ul>
<?=$contenu?>

<script src="js/bootstrap.js"></script>
</body>
</html>
