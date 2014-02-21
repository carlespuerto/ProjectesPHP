<?php

function botoTorna(){
	echo "<input type=\"button\" value=\"Tornar\" onclick=\"history.back(-1)\" />";
}

function altaPilot($array){
	$retorn = 1;
	$control = array();
	foreach ($array as $indice => $valor){
		//Declarem les variables amb el nom del index(aixi tindran el nom del atribut name del formulari)
		$$indice = $valor;		
	} 
	//Comprovar dni 
	 $letras = array('T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T');
	 $numero=intval($nif);
	 $letra=substr($nif,-1,8);
	 $letrabuena=$letras[$numero%23];

	
	if (($numero > 99999999) || ($numero < 0)){
		return $retorn=-21;
	}
		
	if((($letrabuena != strtoupper($letra)) || (strlen($nif))>9) || (!ctype_alpha($letra))){ 
		return $retorn=-22;
	}	
	
	if((strlen($nif))==0){
		return $retorn=-23;
	}
	
	//Comprovem el nom

	if(strlen($nom)==0){
		return $retorn=-11;
	}
	//Comprovar cognoms
	if(strlen($cognoms)==0){
		return $retorn= -2;
	}
	
	//Comprovar telefon
	//if(!ereg("^\+?34([ \t|\-])?)?[9|6|7]((\d{1}([ \t|\-])?[0-9]{3})|(\d{2}([ \t|\-])?[0-9]{2}))([ \t|\-])?[0-9]{2}([ \t|\-])?[0-9]{2}) ",$telefon){
	//if(!ereg("^\+?34[9|6|7]",$telefon)){
	if(!(is_int($telefon))&&(strlen($telefon)!=9)){
		return $retorn = -3;
	}
	
	//Comprovar adreça 
	if(strlen($adreça)==0){
		return $retorn = -4;
	
	}
	
	//Comprovar número d'aterratges
	if(!(ctype_digit($aterratges))){
		return $retorn = -5;
	}
		
	
	//Comprovar les hores de vol
	if((empty($horesvol))||(!is_numeric($horesvol))){
		return $retorn = -6;
		
	}
	return $retorn;
}

?>
