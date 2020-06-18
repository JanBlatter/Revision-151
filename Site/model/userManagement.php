<?php
/**
 * Revision-151 - userManagement.php
 * User: Jan.BLATTER
 * Date: 12.06.2020
 */

require "controler/dbConnector.php";

function CheckLogin($formL)
{

    $username = $formL['username'];                    // username du formulaire --> dans la variable email


    $requete = "SELECT NomdeCompte FROM users where NomdeCompte  ='$username';";      // La commande MySQL , vérifie si le de nom du compte existe
    $result = executeQuery($requete);

    if ($result) {
        $_SESSION['client'] = $formL['username'];



    }else{ return false;
    }
}