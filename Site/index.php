<?php
/**
 * Révision 151 - index.php
 * User: Jan.BLATTER
 * Date: 12.06.2020
 */

require "controler/controler.php";

if (isset($_GET['action'])) {            /* Si action est activé , alors va sur une des cases en fonction de l'utilisateur  */
    $action = $_GET['action'];
    switch ($action) {
        case 'home':
            home();
            break;
        case 'login':
            login();
            break;
        case'logout':
            logout();
            break;
        case 'agences':
            agences();
            break;
        case 'clients':
            clients();
            break;
        case 'globales':
            globales();
            break;
        case 'statistiques':
            statistiques();
            break;
        case 'loginIsCorrect':
            loginIsCorrect($_POST);
            break;
        case'CustomersDelete':
            CustomersDelete();
            break;
        case'CustomersAdd':
            CustomersAdd($_POST);
            break;
        case'CustomersModify':
            CustomersModify($_POST);
                break;
        case 'CustomersDetails':
            CustomersDetails($_GET['id']);
            break;
        case'AgenciesAdd':
            AgenciesAdd($_POST);
            break;
        case'AgentsModify':
            AgentsModify($_POST);
            break;
        case'AgentsDelete':
            AgentsDelete();
            break;
        case'agentsDetails':
            agentsDetails($_GET['id']);
            break;
    }
}
    else {
        home();

}