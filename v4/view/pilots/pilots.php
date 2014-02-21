<h1>Pilots</h1>

<div id="formularis">
<?php
	if($grup==1){
?>
		<nav>
		  <ul>
			<li>
				<a href="../view/inici.php?pilots&alta">Alta pilot</a>
			</li>
			<li>
				<a href="../view/inici.php?pilots&baixa">Baixa pilot</a>
			</li>
			<li>
				<a href="../view/inici.php?pilots&modifica">Modificar pilot</a>
			</li>
			<li>
				<a href="../view/inici.php?pilots&consulta">Consultar pilot</a>
			</li>
			<li>
				<a href="../view/inici.php?pilots&llista">Llistar pilots</a>
			</li>
			<li>
				<a href="../view/inici.php?pilots&recupera">Recupera pilots esborrats</a>
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
				<a href="../view/inici.php?pilots&consulta">Consultar pilot</a>
			</li>
			<li>
				<a href="../view/inici.php?pilots&llista">Llistar pilots</a>
			</li>
		  </ul>
		</nav>
<?php 
	}


if(isset($_GET['alta'])){
	include 'pilots/alta_pilot.php';
}else if(isset($_GET['baixa'])){
	include 'pilots/baixa_pilot.php';
}else if(isset($_GET['modifica'])){
	include 'pilots/modifica_pilot.php';
} else if(isset($_GET['consulta'])){
	include 'pilots/consulta_pilot.php';
} else if(isset($_GET['llista'])){
	include 'pilots/llista_pilot.php';
} else if(isset($_GET['recupera'])){
	include 'pilots/recupera_pilot.php';
} 
?>




