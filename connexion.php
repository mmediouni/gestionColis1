<?php
//On demarre les sessions
session_start();

/******************************************************
----------------Configuration Obligatoire--------------
Veuillez modifier les variables ci-dessous pour que l'
espace membre puisse fonctionner correctement.
******************************************************/
$s = 'mysql:host=localhost;dbname=bibl';
$login = "root";
$mot_pass= "";
try{
$dbh= new PDO( $s, $login, $mot_pass) ;

}
catch (Exception $b){
echo "echec de connexion";}


?>