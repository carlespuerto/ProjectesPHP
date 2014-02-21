<?php
include 'header.php';
include 'main.php';
if ($_REQUEST['result']!=1){
	echo "<h1>No s'ha pogut realitzar!</h1>";
	echo "<div id=\"show_gestio\">";	
	echo"<fieldset>";
		echo"<p>La petició no s'ha gestionat!</p>";
		echo"<p>".llistatErrors($_REQUEST['result'])."</p>";
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
include 'footer.php';
?>
