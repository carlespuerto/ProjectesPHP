<?php
include '../view/header.php';
include '../view/main.php';
if (isset($_REQUEST['submit'])){
	$passok=altaPilot($_REQUEST); //Aquí la crida a la funció que hem tornarà 1 si ok o -x amb l'error corresponent
	if($passok==1){
		$existeix=$aeroport->cercaPilot($_REQUEST['nif']);
		if($existeix==-1){
			$aeroport->inserirPilot($_REQUEST['nif'],$_REQUEST['nom'],$_REQUEST['cognoms'],$_REQUEST['telefon'],$_REQUEST['adreça'],$_REQUEST['aterratges'],$_REQUEST['horesvol'],true,$con);
		}else{
			$passok=-7;
		}
	}

}

if (isset($_REQUEST['actualitza'])){
	$passok=altaPilot($_REQUEST); //Aquí la crida a la funció que hem tornarà 1 si ok o -x amb l'error corresponent
	//$aeroport->modificaPilot($_REQUEST['nif'],$_REQUEST['nom'],$_REQUEST['cognoms'],$_REQUEST['telefon'],$_REQUEST['adreça'],$_REQUEST['aterratges'],$_REQUEST['horesvol']);
		
	if ($passok==1){
		$pos=$_REQUEST['posicio'];
		$aeroport->modificaPilot($_REQUEST['nif'],$_REQUEST['nom'],$_REQUEST['cognoms'],$_REQUEST['telefon'],$_REQUEST['adreça'],$_REQUEST['aterratges'],$_REQUEST['horesvol'],true,$con);

	}
}
	
if ((isset($_REQUEST['baixa']))&&($_REQUEST['baixa']=="Donar de baixa")){	
	$passok=altaPilot($_REQUEST);	
	if ($passok==1){
		$aeroport->esborraPilot($_REQUEST['nif'],$_REQUEST['nom'],$_REQUEST['cognoms'],$_REQUEST['telefon'],$_REQUEST['adreça'],$_REQUEST['aterratges'],$_REQUEST['horesvol'],true,$con);	

	}
}

if ((isset($_REQUEST['alta']))&&($_REQUEST['alta']=="Activar")){	
	$passok=altaPilot($_REQUEST);	
	if ($passok==1){
		$aeroport->activaPilot($_REQUEST['nif'],$_REQUEST['nom'],$_REQUEST['cognoms'],$_REQUEST['telefon'],$_REQUEST['adreça'],$_REQUEST['aterratges'],$_REQUEST['horesvol'],true,$con);	

	}
}


if ($passok!=1){
	echo "<h1>No s'ha pogut realitzar!</h1>";
	echo "<div id=\"show_gestio\">";	
	echo"<fieldset>";
		echo"<p>La petició no s'ha gestionat!</p>";
		echo"<p>".llistatErrors($passok)."</p>";
	echo"</fieldset>";
	botoTorna();
	echo"</div>";
}else{
	echo "<h1>Gestió realitzada correctament!</h1>";
	echo "<div id=\"show_gestio\">";	
	echo"<fieldset>";
		echo"<p>La petició s'ha gestionat correctament!</p>";
	echo"</fieldset>";
	echo"</div>";
}
include '../view/footer.php';
?>
