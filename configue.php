<?php

function database_connection() {
    try {
        $pdo = new PDO('mysql:dbname=ph_mvc;host=localhost', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Could not connect to the database :" . $e->getMessage());
    }
}

?>