<?php
require_once 'model/stagiaire.php';

function indexAction()
{
    $formations = latest();
    $total_C =  total_consultation();
    require_once 'views/liste_stagiaires.php';
}

function createAction()
{
    require_once 'views/create.php';
}

function storeAction()
{
    create();
    header('location:index.php?action=list');
}

function editAction()
{
    $id = $_GET['id'];
    $formation = view($id);
    require_once 'views/edit.php';
}

function updateAction()
{
    extract($_POST);
    edit($id, $fomation_sanitaire, $consultation_md_paramd, $consultation_md_paramd_Points, 
    $nbr_population, $nbr_population_Points,$nbr_accouchement,$nbr_accouchement_Points,$nbr_Points_Total,
    $Credit,$budget);
    header('location:index.php?action=list');
}

function deleteAction()
{
    $id = $_GET['id'];
    require_once 'views/delete.php';
}

function destroyAction()
{
    destroy($_GET['id']);

    header('location:index.php?action=list');

}