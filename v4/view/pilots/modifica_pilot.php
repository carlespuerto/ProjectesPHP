<script>
window.onbeforeunload = function exitAlert(){
	var textOut = "Les dades es perdran. Voleu sortir de la pàgina?";
	return textOut;
}
</script>
<div id="alta">
	<p id="titols_accions">Modificar pilot</p>
<form id="modifica" method="post">
		
		Tria el pilot a modificar: 
		<select name="modifica">		
<?php 	$j=0;	
		$totsPilots = $aeroport->getPilots();
		for ($i=0; $i<count($totsPilots); $i++){
			if ($totsPilots[$i]->getActiu()==true){
				echo "<option value=$i>".$totsPilots[$i]->getNifPilot()."</option>";				
			}
		}
?>
		</select>	
		<br><input type="submit" name="submit" value="Modifica" onclick="window.onbeforeunload=null;">

</form>
<?php
if (isset($_REQUEST['submit'])){
	$posicio=$_REQUEST['modifica'];
?>
	<form id="actualitza" method="post" action="../controller/valida_pilot.php">
	<table>
		<input type="hidden" name="posicio" value=<?php $posicio ?> />
		<tr><td colspan=2 id="taula_titol">Dades Pilot</td></tr>
		<tr>
			<td>NIF: </td><td><input type="text" name="nif" value="<?php echo $totsPilots[$posicio]->getNifPilot() ?>" readonly></td>
		</tr>
		<tr>
			<td>Nom: </td><td><input type="text" value="<?php echo $totsPilots[$posicio]->getNom() ?>" name="nom" ></td>
		</tr>
		<tr>
			<td>Cognoms: </td><td><input type="text" value="<?php echo $totsPilots[$posicio]->getCognoms() ?>" name="cognoms"></td>
		</tr>
		<tr>
			<td>Telèfon:</td><td><input type="text" value="<?php echo $totsPilots[$posicio]->getTelefon() ?>" name="telefon"></td>
		</tr>
		<tr>
			<td>Adreça:</td><td><input type="text" value="<?php echo $totsPilots[$posicio]->getAdreca() ?>" name="adreça"></td>
		</tr>
		<tr>
			<td>Número d'aterratges:</td><td><input type="text" value="<?php echo $totsPilots[$posicio]->getNumAterratges() ?>" name="aterratges"></td>
		</tr>
		<tr>
			<td>Hores de vol:</td><td><input type="text" value="<?php echo $totsPilots[$posicio]->getNumHoresVol() ?>" name="horesvol" value=></td>
		</tr>
		<tr>
			<td colspan="2" id="envia"><input type="submit" name="actualitza" value="Guarda" onclick="window.onbeforeunload=null;"/></td>
		</tr>
	</table>
	</form>
<?php
}

?>
</div>
