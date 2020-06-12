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
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
<h1>Hello World</h1>
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">Mon premier onglet avec Bootstrap</div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Mon second onglet avec Bootstrap</div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Mon dernier onglet avec Bootstrap</div>
</div>
<script src="bootstrap.js"></script>
</body>
</html>