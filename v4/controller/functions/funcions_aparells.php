<?php


function comprovaAparell($array){

	$retorn = 1;
	$control = array();
	//print_r($_REQUEST);
	foreach ($array as $indice => $valor){
		//Declarem les variables amb el nom del index(aixi tindran el nom del atribut name del formulari)
		$$indice = $valor;
		
	} 

	//comprovar idaparell
	if((!ereg("^[a-zA-Z0-9]",$idaparell))){ 
	//if(empty($idaparell)){

		return $retorn = -10;
	}


	//Comprovar longitud
	if(!is_numeric($longitud)){

		return $retorn = -11;
	}

	//Comprovar pes en kg
	if (!is_numeric($pes)) {
		
		return $retorn = -12;
	}
	//Comprovar consum aparell
	if (!is_numeric($pes)) {
		
		return $retorn = -13;
	}

	return $retorn;

}

?>



<!--<table>
		<tr><td colspan=3 id="taula_titol"></td></tr>
		<tr>
			<td>Id Aparell: </td><td><input type="text" name="idaparell"></td>
		</tr>
		<tr>
			<td>Longitud: </td><td><input type="text" name="longitud" ></td><td>metres</td>
		</tr>
		<tr>
			<td>Pes: </td><td><input type="text" name="pes"></td><td>Kg.</td>
		</tr>
		<tr>
			<td>Consum x hora:</td><td><input type="text" name="consum"></td><td>litres</td>
		</tr>
		<tr>
			<td colspan="3" id="envia"><input type="submit" name="submit" value="Guarda"></td>
		</tr>	
	</table>-->