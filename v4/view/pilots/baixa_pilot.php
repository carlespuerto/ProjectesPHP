<div id="alta">
	<p id="titols_accions">Donar de baixa pilot</p>
<!--L'action ha de ser  $_SERVER['PHP_SELF']  ja que sino no reconeix la variable i dona error, abans estaba com echo $PHP_SELF;-->


<form id="baixa" method="post" action="">		
	Tria el pilot a donar de baixa:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<select name="esborra">		
<?php 	
		$j=0;	
		$totsPilots = $aeroport->getPilots();
		for ($i=0; $i<count($totsPilots); $i++){
			if ($totsPilots[$i]->getActiu()==true){
				echo "<option value=$i>".$totsPilots[$i]->getNifPilot()."</option>";				
			}
		}
?>
		</select><br>	
		<br><input type="submit" name="mostra" value="Mostrame'l" />
		<!--		-->
</form>
<?php 
if (isset($_REQUEST['mostra'])){
	$posicio=$_REQUEST['esborra'];
?>
	<form id="baixa2" method="get" action="../controller/valida_pilot.php">
	<table>
		<input type="hidden" name="posicio" value="<?php $posicio ?>" />
		<tr><td colspan=2 id="taula_titol">Dades Pilot</td></tr>
		<tr>
			<td>NIF: </td><td><input type="text" name="nif" value="<?php echo $totsPilots[$posicio]->getNifPilot() ?>" readonly /></td>
		</tr>
		<tr>
			<td>Nom: </td><td><input type="text" value="<?php echo $totsPilots[$posicio]->getNom() ?>" name="nom" readonly /></td>
		</tr>
		<tr>
			<td>Cognoms: </td><td><input type="text" value="<?php echo $totsPilots[$posicio]->getCognoms() ?>" name="cognoms" readonly /></td>
		</tr>
		<tr>
			<td>Telèfon:</td><td><input type="text" value="<?php echo $totsPilots[$posicio]->getTelefon() ?>" name="telefon" readonly /></td>
		</tr>
		<tr>
			<td>Adreça:</td><td><input type="text" value="<?php echo $totsPilots[$posicio]->getAdreca() ?>" name="adreça" readonly /></td>
		</tr>
		<tr>
			<td>Número d'aterratges:</td><td><input type="text" value="<?php echo $totsPilots[$posicio]->getNumAterratges() ?>" name="aterratges" readonly /></td>
		</tr>
		<tr>
			<td>Hores de vol:</td><td><input type="text" value="<?php echo $totsPilots[$posicio]->getNumHoresVol() ?>" name="horesvol" readonly /></td>
		</tr>
	</table>
	<input type="submit" name="baixa" value="Donar de baixa" />
</form>
<?php
}

?>
</div>
