<?php
require_once("class_db.php");

class PilotDb{

	public function inserir($pilot,$con) {	
		$query="insert into pilots values('".$pilot->getNifPilot()."', '".$pilot->getNom()."', '".$pilot->getCognoms()."', '".$pilot->getTelefon()."', '".$pilot->getAdreca()."', '".$pilot->getNumAterratges()."', '".$pilot->getNumHoresVol()."', '".$pilot->getActiu()."');";	
		echo "<br>".$query."<br>";					
		$con->consulta($query);		
	} 
	
	public function modificar($pilot,$con) {	
		$query="update pilots set nifpilot='".$pilot->getNifPilot()."', nom='".$pilot->getNom()."', cognoms='".$pilot->getCognoms() ."', telefon='".$pilot->getTelefon() ."', adreca='".$pilot->getAdreca() ."', numAterratges='".$pilot->getNumAterratges() ."', numHoresVol='".$pilot->getNumHoresVol() ."' where nifpilot='".$pilot->getNifPilot()."';";	
		echo "<br>".$query."<br>";					
		$con->consulta($query);		
	} 
	
	public function esborrar($pilot,$con) {	
		$query="update pilots set actiu='false' where nifpilot='".$pilot->getNifPilot()."';";	
		echo "<br>".$query."<br>";					
		$con->consulta($query);		
	} 
	
	
	public function activar($pilot,$con) {	
		$query="update pilots set actiu='1' where nifpilot='".$pilot->getNifPilot()."';";	
		echo "<br>".$query."<br>";					
		$con->consulta($query);		
	} 
	
	public function mostrar($con) {
		$query="select * from pilots";
		$totsPilots = $con->consultaArray($query);	
		$length=count($totsPilots);
		$tots= array();	
		for ($i=0;$i<$length;$i++){
			$tots[]= new Pilot($totsPilots[$i][0],$totsPilots[$i][1],$totsPilots[$i][2],$totsPilots[$i][3],$totsPilots[$i][4],$totsPilots[$i][5],$totsPilots[$i][6],$totsPilots[$i][7]);
		}
		return $tots;
	}
}    
 ?>
