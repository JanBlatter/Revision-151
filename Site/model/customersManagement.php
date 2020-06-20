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

function showCustomerById($id){  //fonction qui affiche la personne avec un ID ciblé
    $requeteCustomers = "SELECT * FROM customers WHERE id = $id";
    return executeQuery($requeteCustomers);
}

function showAgentsById($id){  //fonction qui affiche la personne avec un ID ciblé
    $requeteCustomers = "SELECT * FROM agencies WHERE id = $id";
    return executeQuery($requeteCustomers);
}

function DeleteCustomers()   // supprime une personne
{

    $requeteCustomers = "DELETE FROM customers WHERE id ='".$_GET["id"]."';";
    $result= executeQuery($requeteCustomers);

    return $result;

}



function AddCustomers($formAdd)              //     Ajoute une personne
{
    $name = $formAdd['nom'];
    $surname = $formAdd['prénom'];
    $city = $formAdd['ville'];

    $requeteCustomers = "INSERT INTO agencies.customers (name, surname,city) VALUES ('$name','$surname','$city');";
    $result= executeQuery($requeteCustomers);

    return $result;
}

    function ModCustomers($formMod){
    $id = $_GET['id'];              //chope l'id et le met dans $id
    $name = @$formMod['nomUpdate'];   // le @ permet de laisser vide si le champ n'est pas remplis
    $surname = @$formMod['prenomUpdate'];
    if (!empty($name) && !empty($surname)){   // si name et surname sont pas remplis alors fait la requête.
        $requeteCustomers = "UPDATE customers SET name = '$name', surname = '$surname' WHERE id =$id;";
        $result= executeQuery($requeteCustomers);

        return $result;
    }else {
        $customer = showCustomerById($id);
        require "view/update.php";
    }

}






