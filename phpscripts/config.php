<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
//Database
$local_host="localhost";
$local_database="anpac_Agency";
$local_user="anpac_cody";
$local_password="skiutah4969";

$online_host="localhost";
$online_database="anpac_Agency";
$online_user="anpac_cody";
$online_password="skiutah4969";


try {
	//if(in_array($_SERVER['HTTP_HOST'],array("localhost","127.0.0.1")))

    	$dbh = new PDO('mysql:host='.$local_host.';dbname='.$local_database, $local_user, $local_password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	//else
		
    	//$dbh = new PDO('mysql:host='.$online_host.';dbname='.$online_database, $online_user, $online_password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		//$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Affichage détaillé des exeptions
		//$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);//Fonctionnement en mode objet
} catch (PDOException $e) {
    print "Erreur de connexion à la base de données !<br>" . $e->getMessage() . "<br/>";
   // die();
}
?>