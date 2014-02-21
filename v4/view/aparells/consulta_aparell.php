<div id="alta">
	<p id="titols_accions">Consultar Aparell</p>
<!--L'action ha de ser  $_SERVER['PHP_SELF']  ja que sino no reconeix la variable i dona error, abans estaba com echo $PHP_SELF;-->


<form id="consulta" method="post">		
	Tria l'aparell a Consultar:
	<select name="consultar">		
<?php 	
		$j=0;	
		$totsAparells = $aeroport->getAparells();
		for ($i=0; $i<count($totsAparells); $i++){
			if ($totsAparells[$i]->getActiu()==true){
				echo "<option value=$i>".$totsAparells[$i]->getIdAparell()."</option>";				
			}
		}
?>
		</select>	
		<br><input type="submit" name="mostra" value="Mostrame'l" />	

</form>
<?php 
if (isset($_REQUEST['mostra'])){
	$posicio=$_REQUEST['consultar'];
?>
	<table>
		<input type="hidden" name="posicio" value="<?php $posicio ?>" />
		<tr><td colspan=3 id="taula_titol">Dades Aparells</td></tr>
		<tr>
			<td>Id Aparell: </td><td><input type="text" name="idaparell" value="<?php echo $totsAparells[$posicio]->getIdAparell(); ?>" readonly /></td>
		</tr>
		<tr>
			<td>Longitud: </td><td><input type="text" value="<?php echo $totsAparells[$posicio]->getLongitud(); ?>" name="longitud" readonly /></td><td>metres</td>
		</tr>
		<tr>
			<td>Pes: </td><td><input type="text" value="<?php echo $totsAparells[$posicio]->getPes(); ?>" name="pes" readonly /></td><td>Kg.</td>
		</tr>
		<tr>
			<td>Consum x hora:</td><td><input type="text" value="<?php echo $totsAparells[$posicio]->getConsumXhora(); ?>" name="consum" readonly /></td><td>litres</td>
		</tr>
	</table>
<?php 
}
?>
</div> 
