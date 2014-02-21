<?php
require_once("class_db.php");

class AeroportDb{

	public function inserirPilot($pilot,$con) {	
		$query="insert into pilots values('".$pilot->getNifPilot()."', '".$pilot->getNom()."', '".$pilot->getCognoms()."', '".$pilot->getTelefon()."', '".$pilot->getAdreca()."', '".$pilot->getNumAterratges."', '".$pilot->getNumHoresVol()."', '".$pilot->getActiu()."');";	
		echo "<br>".$query."<br>";					
		$con->consulta($query);		
	} 
	
	public function mostrarPilots($con) {
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
