<div id="alta">
	<p id="titols_accions">Donar de baixa Vol</p>
<!--L'action ha de ser  $_SERVER['PHP_SELF']  ja que sino no reconeix la variable i dona error, abans estaba com echo $PHP_SELF;-->


<form id="baixa" method="post">		
	Tria el vol a donar de baixa:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<select name="esborra">		
<?php 	
		$totsVols = $aeroport->getVols();
		for ($i=0; $i<count($totsVols); $i++){
			if ($totsVols[$i]->getActiu()==true){
				echo "<option value=$i>".$totsVols[$i]->getIdVol()."</option>";				
			}
		}
?>
		</select><br>
		<br><input type="submit" name="mostra" value="Mostrame'l" />
		<input type="submit" name="baixa" value="Donar de baixa" />	

</form>
<?php 
if (isset($_REQUEST['mostra'])){
	$posicio=$_REQUEST['esborra'];

?>
	<table>
		<input type="hidden" name="posicio" value="<?php $posicio ?>" />
		<tr><td colspan=2 id="taula_titol">Dades Vols</td></tr>
		<tr>
			<td>Id vol: </td><td><input type="text" name="idvol" value="<?php echo $totsVols[$posicio]->getIdVol(); ?>" readonly /></td>
		</tr>
		<tr>
			<td>Id aparell: </td><td><input type="text" value="<?php echo $totsVols[$posicio]->getAparell(); ?>" name="idaparell" readonly />
		</tr>
		<tr>
			<td>Data:</td><td><input type="text" value="<?php echo $totsVols[$posicio]->getDataVol(); ?>" name="data" readonly />
		</tr>
		<tr>
			<td>Durada:</td><td><input type="text" value="<?php echo $totsVols[$posicio]->getDuradaVol(); ?>" name="durada" readonly />
		</tr>
		<tr>
			<td>NIF Pilot:</td><td><input type="text" value="<?php echo $totsVols[$posicio]->getPilot(); ?>" name="nifpilot" readonly /></td>
		</tr>
	</table>
<?php
}
if ((isset($_REQUEST['baixa']))&&($_REQUEST['baixa']=="Donar de baixa")){	
	$posicio=$_REQUEST['esborra'];
	$totsVols[$posicio]->esborraVol();
	if(!$arraypilot[$pos]){	
		//header("Location: ./validacio.php?result=1"); //l'error el passem a validació que ens dirà ok, si tot ok o mal si falta algo
	}else{
		//header("Location: ./validacio.php?result=-4");
	}
}
?>
</div>
