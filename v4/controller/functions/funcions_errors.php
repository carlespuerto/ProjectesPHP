<?php

function llistatErrors($error){
	$motiu="";
	switch($error){
	
		case -21:
			$motiu="Numero de DNI incorrecte";
			break;
		
		case -22:
			$motiu="La lletra del DNI es incorrecte";
			break;
		
		case -23:
			$motiu="El DNI esta buït";
			break;
		
		case -24:
			$motiu="No has posat lletra al DNI";
			break;
		
		case -1:
			$motiu="Nom incorrecte";
			break;
		
		case -2:
			$motiu="Cognom incorrecte";
			break;
		
		case -3:
			$motiu="Numero de telefon incorrecte";
			break;
		
		case -4:
			$motiu="Adreça incorrecte";
			break;
		
		case -5:
			$motiu="Numero d'aterratges incorrecte";
			break;
		
		case -6:
			$motiu="Hores de vol incorrecte";
			break;
		
		case -7:
			$motiu="Ja existeix un pilot amb aquest DNI";
			break;
		
		case -9:
			$motiu="No s'ha pogut esborrar l'usuari";
			break;

		case -10:
			$motiu="ID aparell incorrecte";
			break;

		case -11:
			$motiu="La longitud es incorrecte";
			break;

		case -12:
			$motiu="El pes es incorrecte";
			break;

		case -13:
			$motiu="El consum es incorrecte";
			break;

		case -14:
			$motiu="Idvol incorrecte";
			break;

		case -15:
			$motiu="Data incorrecte";
			break;

		case -16:
			$motiu="La durada del vol es incorrecte";
			break;
		default: 
			$motiu="Hi ha hagut un error inesperat";
			break;
	}
	return $motiu;
}

?>
