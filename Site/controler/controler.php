<?php
/**
 * Revision-151 - controler.php
 * User: Jan.BLATTER
 * Date: 12.06.2020
 */

require "model/userManagement.php";
require "model/customersManagement.php";
require "model/agenciesManagement.php";

function home()
{

    require "view/home.php";
}


function login()
{
    require "view/login.php";
}

function logout(){
    $_SESSION = session_destroy();
    home();
}

function agences()
{
    $AgenciesResults=showAgencies();
    require "view/agences.php";
}


function clients()
{
    $customersResults=showCustomers();


    require "view/clients.php";
}

function update()
{


    require "view/update.php";
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

/// CUSTOMERS ///
function CustomersDelete()
{
    $customersResults= showCustomers();
    DeleteCustomers();
    clients();


}


function CustomersAdd($formAdd){
    $customersResults= showCustomers();
    AddCustomers($formAdd);
    clients();

}

function CustomersModify($formMod){

    ModCustomers($formMod);
    clients();

}

////////
///
/// AGENTS ////


function AgenciesAdd($formAgent){
    $AgenciesResults= showAgencies();
    AddAgencies($formAgent);
    agences();

}

function AgentsModify($formAgentMod){

    ModAgents($formAgentMod);
    Agences();

}

function AgentsDelete(){
    $customersResults= showCustomers();
    DeleteAgents();
    Agences();
}