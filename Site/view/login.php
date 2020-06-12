<?php
/**
 * Revision-151 - login.php
 * User: Jan.BLATTER
 * Date: 12.06.2020
 */
ob_start(); //ouvre la mémoire tampon
?>
    <form class="form" method="POST" action="index.php?action=loginIsCorrect">
        <br>
        <h1> Login </h1>
        <b>Username:</b><br>
        <input  type="text" name="username" value="" placeholder="enter username" required>
        <br>
        <b>Password:</b><br>
        <input type="password" name="password" value="" placeholder="enter Password" required>
        <br>
        <br>
        <input type="submit" value="Login"> <input type="button" value="Reset"> Forgot <a href="">password</a> ?
    </form>
<?php
$contenu = ob_get_clean(); //efface la mémoire tampon dans la variable $content
require "view/gabarit.php";  //Appele le fichier. gabarit.php est requis pour que ça marche.