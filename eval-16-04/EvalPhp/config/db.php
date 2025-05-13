<?php

try {
    //Ici je me connecte à la base de données
    $mysqlClient = new PDO('mysql:host=localhost;dbname=forum2;charset=utf8', 'root','votre_mot_de_passe');//'oo' erreur
} catch (Exception $e){
    //Ici je récupere et affiche l'erreur
    die('ERREUR : ' . $e->getMessage());
}