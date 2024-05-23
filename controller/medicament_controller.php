<?php
require_once 'model/medicament_model.php';

function medIndexAction()
{
    
    $medicaments = getMedicaments();
    require_once 'views/medicament_view/liste_medicament.php';
}

// function medIndexAction()
// {
//     if (isset($_POST['formation_sanitaire'])) {
//         $formation_sanitaire = $_POST['formation_sanitaire'];
        
//         $medicaments = getMedicaments($formation_sanitaire);

//         require_once 'views/medicament_view/liste_medicament.php';
//     } else {
        
//         echo "Le paramètre formation_sanitaire est manquant.";
//     }
// }


function createMed()
{
    require_once 'views/medicament_view/create_medicament.php';
}
function storemedAction()
{
    createMedicaments();
    // medIndexAction();
    header('location:index.php?action=listmed');
    var_dump($_POST);
}

function editmedAction()
{
    $id = $_GET['id'];
    $medicament = viewMed($id);
    require_once 'views/medicament_view/edit_medicament.php';
}


function updatemedAction()
{
    extract($_POST);
    editmed($id, $ref_med, $Conditionnement, $Prix_Estimati, $Quantite_Livree, $montant,$formation_sanitaire);
    header('location:index.php?action=listmed');
    
}


function deletemedAction()
{
    $id = $_GET['id'];
    require_once 'views/medicament_view/delete_medicament.php';
}

function destroymedAction()
{
    destroymed($_GET['id']);
    

    header('location:index.php?action=listmed');

}
?>