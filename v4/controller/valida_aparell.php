<?php
include '../view/header.php';
include '../view/main.php';
if (isset($_REQUEST['submit'])){
	$passok=comprovaAparell($_REQUEST);; //Aquí la crida a la funció que hem tornarà 1 si ok o -x amb l'error corresponent
	if($passok==1){
		$aeroport->inserirAparell($_REQUEST['idaparell'],$_REQUEST['longitud'],$_REQUEST['pes'],$_REQUEST['consum']);
	}
}

if (isset($_REQUEST['actualitza'])){
	$passok=comprovaAparell($_REQUEST); //Aquí la crida a la funció que hem tornarà 1 si ok o -x amb l'error corresponent
	
	if ($passok==1){
		$pos=$_REQUEST['posicio'];
		$aeroport->modificaAparell($_REQUEST['idaparell'],$_REQUEST['longitud'],$_REQUEST['pes'],$_REQUEST['consum']);
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
		echo "<pre>";
		print_r($_SESSION['pilot']);
		print_r($arraypilot);
		echo "</pre>";
	echo"</fieldset>";
	echo"</div>";
}
include '../view/footer.php';
?>
