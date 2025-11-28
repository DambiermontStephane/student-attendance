<?php
include_once 'connexion.php';

function getAllStudents()
{
    try {
        global $pdo;
        return $pdo->query('SELECT * FROM students ORDER BY last_name, first_name');
    } catch (PDOException $exception) {
        echo $exception->getMessage();
    }
}