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

function CustomersDetails($id)
{

    $tableauCustomersDetails = ShowCustomersID($id);

    //cette condition va vérifier si le client a une agence
    if (verificationCustomersAccount($id)) {
        $tableauCustomersAttributes =  ShowCustomersID($id);
        $tableauTotalAmountCustomer = amountTotalCustomer($id);
        require "view/customersDetails.php";
    } else {
        $tableauCustomersAttributes=  ShowCustomersID($id);
        $tableauTotalAmountCustomer = "ce client n'a pas d'argent";
        require "view/customersDetails.php";
    }


}

////////
///
/// AGENTS ////
///


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

function agentsDetails($id)
{

    $tableauAgenciesDetails = ShowAgencieID($id);

    //cette condition va vérifier si le client a une agence
    if (verificationIdAgentsInAccount($id)) {
        $tableauAgencyAttributes = ShowAgencieID($id);
        $tableauTotalAmount = amountTotalAgency($id);
        require "view/agentsDetails.php";
    } else {
        $tableauAgencyAttributes= ShowAgencieID($id);
        $tableauTotalAmount = "Cette agence n'est pas disponible";
        require "view/agentsDetails.php";
    }


}