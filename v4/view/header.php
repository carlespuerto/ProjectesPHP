<?php
require '../config/inici.inc.php';
require_once '../model/business/class_aeroport.php';
//includes
include '../controller/functions/funcions_pilots.php';
include '../controller/functions/funcions_aparells.php';
include '../controller/functions/funcions_errors.php';
include '../controller/functions/funcions_vols.php';
include '../config/variables.php';

/*if(!isset($_SESSION['aeroport'])){
		$aeroport = new Aeroport("Aeroport 1");
		$aeroport->inserirPilot("1234567","Javi","Olmedo",666666666,"Casa del Javi",34,1500);
		$aeroport->inserirPilot("52165327Q","Carles","Puerto",655079064,"Casa meva",56,3000);
		$aeroport->inserirAparell("a320f",26.50,1256.60,33.56);
		$aeroport->inserirAparell("Jumbo747",45.5,2380.20,45.60);
		$_SESSION['aeroport']=serialize($aeroport);
	}
	else {
		$aeroport = unserialize($_SESSION['aeroport']);	
	}*/

?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<script type="text/javascript" src="../view/js/funcions_pilots.js"></script>
		<link rel="stylesheet" href="../view/CSS/style.css">
		<link rel="stylesheet" href="../view/CSS/menus.css">
	</head>
 
	<title>Gestió Aeroport</title>
	<body>
		
		<div id="userlog">
			<?php echo $nom; 
				if ($grup!=0){
					echo "<form action=\"logout.php\" method=\"post\">";
					echo "<input type=\"submit\" name=\"submit\" value=\"Desconnecta\">";
					echo "</form>";
				}
				
			?>	
		</div>
		<div id="logo">
			<p id="titol_logo">Airport Management Suite</p>
			<img id="logo_small" src="../view/images/airport-sign_small.jpg">
		</div>
		
		<ul id="menu">
			
	<?php 		if ($grup==1){ ?>
					<li><a href="../view/inici.php?pilots">Gestionar Pilots</a></li>
					<li><a href="../view/inici.php?aparells">Gestionar Aparells de vol</a></li>
					<li><a href="../view/inici.php?vols">Gestionar Vols</a></li>
					<li><a href="../view/inici.php?costos">Calcular Costos</a></li>
					<li><a href="../view/inici.php?consums">Veure Consums</a></li>
	<?php 		}
				if ($grup==2){ ?>
					<li><a href="../view/inici.php?pilots">Gestionar Pilots</a></li>
					<li><a href="../view/inici.php?aparells">Gestionar Aparells de vol</a></li>
					<li><a href="../view/inici.php?vols">Gestionar Vols</a></li>					
	<?php 		} ?>
			
		</ul>
	
