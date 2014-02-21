<?php


function comprovaVol($array){

	$retorn = 1;
	$control = array();
	//print_r($_REQUEST);
	foreach ($array as $indice => $valor){
		//Declarem les variables amb el nom del index(aixi tindran el nom del atribut name del formulari)
		$$indice = $valor;
		echo $$indice;
		
	} 

	//comprovar idvol
	if((!ereg("^[a-zA-Z0-9]",$idvol))){ 
	//if(empty($idaparell)){

		return $retorn = -14;
	}

	//comprovar data vol
	if(empty($data)){
		return $retorn = -15;
	}else{
		$div=explode("/",$data);
		if (!checkdate($div[1],$div[0],$div[2])) {
			return $retorn = -15;
		}
	}
	

	//comprovar durada vol
	if(empty($durada)){
		return $retorn = -16;
	}else{
		$div=explode(":",$data);
		$hores=$div[0];
		$minuts=$div[1];
		$segons=$div[2];
		//Comprovem hores minuts i segons
		if(($hores<0)||($hores>23)){
			return $retorn = -16;
		}
		if(($minuts<0)||($minuts>59)){
			return $retorn = -16;
		}
		if(($segons<0)||($segons>59)){
			return $retorn = -16;
		}
	}
	return $retorn;

}

?>