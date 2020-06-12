<?php
/**
 * Revision-151 - controler.php
 * User: Jan.BLATTER
 * Date: 12.06.2020
 */


function home()
{

    require "view/home.php";
}


function login()
{

    require "view/login.php";
}

function agences()
{

    require "view/agences.php";
}


function clients()
{

    require "view/clients.php";
}


function globales()
{

    require "view/globales.php";
}


function statistiques()
{

    require "view/statistiques.php";
}

function loginIsCorrect($formL){
    if (CheckLogin($formL)) {
        home();
    } else {
        login();
    }
}