<?php

// function database_connection()
// {
//     return new PDO('mysql:dbname=ph_mvc;host=localhost', 'root', '');
// }
include_once 'configue.php';
function latest()
{
    $pdo = database_connection();
    return $pdo->query('SELECT * FROM repartition ORDER BY id DESC')->fetchAll(PDO::FETCH_OBJ);
}

function create()
{
    extract($_POST);
    $pdo = database_connection();
    $sqlState = $pdo->prepare("INSERT INTO repartition VALUES(null,?,?,?,?,?,?,?,?,?,?)");
    return $sqlState->execute([$fomation_sanitaire, 
                                $consultation_md_paramd, $consultation_md_paramd_Points, 
                                $nbr_population, $nbr_population_Points,
                                $nbr_accouchement,$nbr_accouchement_Points,
                                $nbr_Points_Total,
                                $Credit,$budget]);
}

function edit($id, $fomation_sanitaire, $consultation_md_paramd, $consultation_md_paramd_Points, 
                $nbr_population, $nbr_population_Points,$nbr_accouchement,$nbr_accouchement_Points,$nbr_Points_Total,
                $Credit,$budget)
{
    $pdo = database_connection();
    $sqlState = $pdo->prepare("UPDATE repartition
                                SET 
                                        fomation_sanitaire = ? ,
                                        consultation_md_paramd = ? , 
                                        consultation_md_paramd_Points = ? , 
                                        nbr_population = ? , 
                                        nbr_population_Points = ? , 
                                        nbr_accouchement = ? , 
                                        nbr_accouchement_Points = ? , 
                                        nbr_Points_Total = ? , 
                                        Credit = ? , 
                                        budget = ?  
                                WHERE   id = ?"
                                );
    return $sqlState->execute([$fomation_sanitaire, $consultation_md_paramd, $consultation_md_paramd_Points, 
                                $nbr_population, $nbr_population_Points,$nbr_accouchement,$nbr_accouchement_Points,$nbr_Points_Total,
                                $Credit,$budget, $id]);
}

function total_consultation() {
    $pdo = database_connection();
    $query = $pdo->query('SELECT SUM(consultation_md_paramd) AS consultation_md_paramd,
                            
                            SUM(consultation_md_paramd_Points) AS consultation_md_paramd_Points,
                            SUM(nbr_population) AS nbr_population,
                            SUM(nbr_population_Points) AS nbr_population_Points,
                            SUM(nbr_accouchement) AS nbr_accouchement,
                            SUM(nbr_accouchement_Points) AS nbr_accouchement_Points,
                            SUM(nbr_Points_Total) AS nbr_Points_Total,
                            SUM(Credit) AS Credit,
                            SUM(budget) AS budget
                        FROM repartition');
    return $query ? $query->fetchAll(PDO::FETCH_OBJ) : false;
}
function destroy($id)
{
    $pdo = database_connection();
    $sqlState = $pdo->prepare("DELETE FROM repartition WHERE id = ?");
    return $sqlState->execute([$id]);
}

function view($id)
{
    $pdo = database_connection();
    $sqlState = $pdo->prepare("SELECT * FROM repartition WHERE id = ?");
    $sqlState->execute([$id]);
    return $sqlState->fetch(PDO::FETCH_OBJ);

}