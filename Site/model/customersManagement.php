<?php
/**
 * Revision-151 - customersManagement.php
 * User: Jan.BLATTER
 * Date: 18.06.2020
 */


function showCustomers(){

    $requeteCustomers= "SELECT * FROM customers;";
    $result = executeQuery($requeteCustomers);

    return $result;
}


function DeleteCustomers()
{

    $requeteCustomers = "DELETE FROM customers WHERE id ='".$_GET["id"]."';";
    $result= executeQuery($requeteCustomers);

    return $result;

}



function AddCustomers($formAdd)
{

    $requeteCustomers = "INSERT INTO customers value ('". $_GET["name"]." ','" . $_GET["surname"]." '," . $_GET["city"].';';
    $result= executeQuery($requeteCustomers);

    return $result;
}



