<?php

//Connexion à la base de données et la gestion des erreurs
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=db_msg;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>