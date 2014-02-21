<h1>Vols</h1>
<div id="formularis">
<?php
	if($grup==1){
?>
		<nav>
		  <ul>
			<li>
				<a href="../view/inici.php?vols&alta">Alta vol</a>
			</li>
			<li>
				<a href="../view/inici.php?vols&baixa">Baixa vol</a>
			</li>
			<li>
				<a href="../view/inici.php?vols&modifica">Modificar vol</a>
			</li>
			<li>
				<a href="../view/inici.php?vols&consulta">Consultar vol</a>
			</li>
			<li>
				<a href="../view/inici.php?vols&llista">Llistar vols</a>
			</li>
		  </ul>
		</nav>
<?php	
	}else
	if ($grup==2){
?>
				<nav>
		  <ul>
			<li>
				<a href="../view/inici.php?vols&consulta">Consultar vol</a>
			</li>
			<li>
				<a href="../view/inici.php?vols&llista">Llistar vols</a>
			</li>
		  </ul>
		</nav>
<?php
	}
if(isset($_GET['alta'])){
	include 'vols/alta_vol.php';
}else if(isset($_GET['baixa'])){
	include 'vols/baixa_vol.php';
}else if(isset($_GET['modifica'])){
	include 'vols/modifica_vol.php';
} else if(isset($_GET['consulta'])){
	include 'vols/consulta_vol.php';
} else if(isset($_GET['llista'])){
	include 'vols/llista_vol.php';
} 
