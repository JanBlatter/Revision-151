<?php
/**
 * Revision-151 - userManagement.php
 * User: Jan.BLATTER
 * Date: 12.06.2020
 */

require "dbConnector.php";

function CheckLogin($formL)
{
    $password = $formL['password'];                 // le password du formulaire --> dans la variable password
    $username = $formL['username'];                    // username du formulaire --> dans la variable email


    $requete = "SELECT id_customer, id_agency FROM users where id_customer  ='$username';";      // La commande MySQL , vérifie si l'email existe
    $result = executeQuery($requete);

    if ($result) {
        if(password_verify($password, $result[0]['id_agency'])){

            // si le compte existe , vérifie le password haché
            $_SESSION['username2'] = $formL['username'];

        } else {
            return false;
        }
    }else{ return false;
    }
}
