<h1>Aparells</h1>
<div id="formularis">
<?php
	if($grup==1){
?>
		<nav>
		  <ul>
			<li>
				<a href="../view/inici.php?aparells&alta">Alta aparell</a>
			</li>
			<li>
				<a href="../view/inici.php?aparells&baixa">Baixa aparell</a>
			</li>
			<li>
				<a href="../view/inici.php?aparells&modifica">Modificar aparell</a>
			</li>
			<li>
				<a href="../view/inici.php?aparells&consulta">Consultar aparell</a>
			</li>
			<li>
				<a href="../view/inici.php?aparells&llista">Llistar aparells</a>
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
				<a href="../view/inici.php?aparells&consulta">Consultar aparell</a>
			</li>
			<li>
				<a href="../view/inici.php?aparells&llista">Llistar aparells</a>
			</li>
		  </ul>
		</nav>
<?php
	}
if(isset($_GET['alta'])){
	include 'aparells/alta_aparell.php';
}else if(isset($_GET['baixa'])){
	include 'aparells/baixa_aparell.php';
}else if(isset($_GET['modifica'])){
	include 'aparells/modifica_aparell.php';
} else if(isset($_GET['consulta'])){
	include 'aparells/consulta_aparell.php';
} else if(isset($_GET['llista'])){
	include 'aparells/llista_aparell.php';
} 
