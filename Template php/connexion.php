<?php
session_start();

$server = 'localhost'; //nom du server 
$username ='root'; //nom d'utilisateur
$passw ='root'; //mot de passe
$database ='PARTIEL-PHP'; //nom de la base de donnée

$conn = mysqli_connect($server, $username, $passw, $database); 
//méthode pour se connecter à la base de donnée

if (!$conn){//Si la connexion ne fonctionne pas
   die('Error'); //On exit
}
?>
