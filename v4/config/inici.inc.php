<?php 
require_once("../model/business/class_aeroport.php");
require_once("../model/business/class_pilot.php");
require_once("../model/DAO/class_aeroportdb.php");
require_once("../model/DAO/class_db.php");
require_once("config.php");
	$con = new mysqldb($server,$usuari,$password,$database);
	$aeroport= new Aeroport("Aeroport del tito");
	$aeroport->carregarPilotsBD($con);
?>

