<script>
window.onbeforeunload = function exitAlert(){
	var textOut = "Les dades es perdran.Voleu sortir de la pàgina?";
	return textOut;
}
</script>
<div id="alta">
	<p id="titols_accions">Alta Vol</p>
<form id="form_alta" method="post" action="../validacions/valida_vol.php" >
	<table>
		<tr><td colspan="2" id="taula_titol"></td></tr>
		<tr>
			<td>Id vol:</td><td><input type="text" name="idvol"></td>
		</tr>
		<tr>
			<td>Id Aparell:</td>
			<td>
				<?php 	
				$j=0;		
				echo "<select name=\"idaparell\">";
				$totsAparells = $aeroport->getAparells();
				for ($i=0; $i<count($totsAparells); $i++){
					if ($totsAparells[$i]->getActiu()==true){
						$ap=$totsAparells[$i]->getIdAparell();
						echo "<option value=$ap>".$totsAparells[$i]->getIdAparell()."</option>";				
					}
				}
				echo "</select>";			
				?>
			</td>
		</tr>
		<tr>
			<td>Data vol:</td><td><input type="text" name="data" placeholder="format: dd/mm/YYYY" /></td>
		</tr>
		<tr>
			<td>Durada vol:</td><td><input type="text" name="durada" placeholder="format: HH:MM:SS" /></td>
		</tr>
		<tr>
			<td>NIF Pilot:</td>
			<td>
				<?php 	
				$j=0;		
				echo "<select name=\"nifpilot\">";
				$totsPilots = $aeroport->getPilots();
				for ($i=0; $i<count($totsPilots); $i++){
					if ($totsPilots[$i]->getActiu()==true){
						$pl=$totsPilots[$i]->getNifPilot();
						echo "<option value=$pl>".$totsPilots[$i]->getNifPilot()."</option>";				
					}
				}
				echo "</select>";			
				?>
			</td>
		</tr>
		<tr>
			<td colspan="2" id="envia"><input type="submit" name="submit" value="Guarda" onclick="window.onbeforeunload=null;"/></td>
		</tr>	
	</table>
</form> 
</div>
<div id="mostra">

</div>
