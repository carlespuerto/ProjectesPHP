<script>
window.onbeforeunload = function exitAlert(){
	var textOut = "Les dades es perdran.Voleu sortir de la pàgina?";
	return textOut;
}
</script>
<div id="alta">
	<p id="titols_accions">Modificar aparell</p>
<!--L'action ha de ser  $_SERVER['PHP_SELF']  ja que sino no reconeix la variable i dona error, abans estaba com echo $PHP_SELF;-->


<form id="modifica" method="post">		
	Tria l'aparell a modificar:
	<select name=modifica>	
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
	<br><input type="submit" name="submit" value="Modifica" onclick="window.onbeforeunload=null;" />

</form>
<?php 
if (isset($_REQUEST['submit'])){
	$posicio=$_REQUEST['modifica'];
?>
	<form id="actualitza" method="post" action="../validacions/valida_aparell.php">
	<table>
		<input type="hidden" name="posicio" value=<?php $posicio ?> >
		<tr><td colspan=3 id=\"taula_titol\">Dades Aparell</td></tr>
		<tr>
			<td>Id Aparell: </td><td><input type="text" name="idaparell" value="<?php echo $totsAparells[$posicio]->getIdAparell(); ?>" readonly /></td>
		</tr>
		<tr>
			<td>Longitud: </td><td><input type="text" value="<?php echo $totsAparells[$posicio]->getLongitud(); ?>" name="longitud" /></td><td>metres</td>
		</tr>
		<tr>
			<td>Pes: </td><td><input type="text" value="<?php echo $totsAparells[$posicio]->getPes(); ?>" name="pes" /></td><td>Kg.</td>
		</tr>
		<tr>
			<td>Consum x hora:</td><td><input type="text" value="<?php echo $totsAparells[$posicio]->getConsumXhora(); ?>" name="consum" /></td><td>litres</td>
		</tr>
		<tr>
			<td colspan="3" id="envia"><input type="submit" name="actualitza" value="Guarda" onclick="window.onbeforeunload=null;" /></td>
		</tr>
	</table>
	</form>
<?php 
}

?>
</div>
