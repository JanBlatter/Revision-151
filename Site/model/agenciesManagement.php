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

function ModAgents($formAgentMod){ //Modifie l'agent
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

//cette requete va vérifier si le clients selectionné a une agence
function verificationIdAgentsInAccount($id)
{
    $requeteCustomers = "SELECT id_agency FROM accounts where id_agency='$id';";
    $result = executeQuery($requeteCustomers);

    return $result;
}

//cette fonction sert a récupéré les information d'un client de la BD
function ShowAgencieID($id){
    $requeteCustomers="SELECT * FROM agencies where id='$id';";

    $result=executeQuery($requeteCustomers);

    return $result;
}


//sommes total par agences
function amountTotalAgency($id){
    $requeteCustomers = "SELECT SUM(amount) FROM accounts WHERE id_agency=$id;";
    $result= executeQuery($requeteCustomers);

    return $result[0][0];
}