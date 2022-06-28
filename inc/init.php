
<?php
// Connexion à la BDD
$pdo = new PDO('mysql:host=localhost;dbname=boutique','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

//var_dump($pdo);

// variable globale pour rendre le html dynamique
$content = "";

// Ouverture d'une sessions
session_start();

// définition de constantes
define("RACINE_SITE", $_SERVER["DOCUMENT_ROOT"] . " /php_boutique_saints/");
define("URL", "http://" .$_SERVER["HTTP_HOST"] . " /php_boutique_saints/");

// echo ' Le dossier vers notre site est : ' . RACINE_SITE . '<br>';
// echo  'L \' URL vers notre site est : ' . URL;

require_once("fonction.php");

?>