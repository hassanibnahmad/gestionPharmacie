<?php
require_once 'controller/stagiaire_controller.php';
require_once 'controller/medicament_controller.php'; // /MedicamentCro  ca Création d'un routeur.
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'create':
            createAction();

            break;
        case 'list':
            indexAction();
            
            break;
        case 'destroy':
            destroyAction();
            break;
        case 'edit':
            editAction();
            break;
        case 'store':
            storeAction();
            break;
        case 'update':
            updateAction();
            break;
        case 'delete':
            deleteAction();
            break;
// -------------------------------Medicament-----------------------------------------------
        case 'createMed':
            createMed();
            break;
         
        case 'listmed':
            medIndexAction();
            break;
        case 'storemed':
            storemedAction();
            break;
        case 'deletemed':
            deletemedAction();
            break;
        case 'destroymed':
            destroymedAction();
            break;
        case 'updatemed':
            updatemedAction();
            break;
        case 'editmed':
            editmedAction();
            break;
            
        default:
            echo "Action non reconnue";
            break;
    } 
}
medIndexAction();