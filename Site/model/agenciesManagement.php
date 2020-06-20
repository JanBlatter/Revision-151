<?php
/**
 * 133-Start - agenciesManagement.php
 * User: Janbl
 * Date: 20.06.2020
 */



function showAgencies(){

    $requeteCustomers= "SELECT * FROM agencies;";
    $result = executeQuery($requeteCustomers);

    return $result;
}


function AddAgencies($formAgent)              //     Ajoute  un agent  // le id a été ajouté car le prof n'a pas auto-incrémenté l'ID
{
    $name = $formAgent['nom'];
    $city = $formAgent['ville'];
    $id = $formAgent['id'];

    $requeteCustomers = "INSERT INTO agencies.agencies (id,name, city ,active) VALUES ('$id','$name','$city',1);";
    $result= executeQuery($requeteCustomers);

    return $result;
}

function ModAgents($formAgentMod){
    $id = $_GET['id'];              //chope l'id et le met dans $id
    $name = @$formAgentMod['nomUpdateAgent'];   // le @ permet de laisser vide si le champ n'est pas remplis
    if (!empty($name)){   // si name et surname sont pas remplis alors fait la requête.
        $requeteCustomers = "UPDATE agencies.agencies SET name = '$name'WHERE id =$id;";
        $result= executeQuery($requeteCustomers);

        return $result;
    }else {
        $Agents = showAgentsById($id);
        require "view/updateAgent.php";
    }

}

function DeleteAgents()   // rend une personne inactive
{

    $requeteCustomers = "UPDATE agencies.agencies SET active = 0 WHERE id ='" . $_GET["id"] . "';";
    $result = executeQuery($requeteCustomers);

    return $result;
}