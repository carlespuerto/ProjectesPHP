<div id="alta">
	<p id="titols_accions">Modificar Vol</p>
<!--L'action ha de ser  $_SERVER['PHP_SELF']  ja que sino no reconeix la variable i dona error, abans estaba com echo $PHP_SELF;-->
<?php 

echo "<form id=\"modifica\" method=\"post\">";
		
		echo "Tria el vol a modificar: ";
		echo "<select name=modifica>";		
		$j=0;		
		for ($i=0; $i<count($arrayvols); $i++){
			echo "<option value=$i>".$arrayvols[$i][$j]."</option>";				
		}
		echo "</select>";	
		echo "<br><input type=\"submit\" name=\"submit\" value=\"Modifica\">";

echo "</form>";

if (isset($_REQUEST['submit'])){
	$posicio=$_REQUEST['modifica'];
	echo "<form id=\"actualitza\" method=\"post\">";
	echo "<table>";
		echo "<input type=\"hidden\" name=\"posicio\" value=$posicio >";
		echo "<tr><td colspan=2 id=\"taula_titol\">Dades Vol</td></tr>";
		echo "<tr>";
			echo "<td>Id vol: </td><td><input type=\"text\" name=\"idvol\" value=".$arrayvols[$posicio][0]." readonly></td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Id aparell: </td><td>";	
				$j=0;		
				echo "<select name=\"idaparell\">";
				for ($i=0; $i<count($arrayaparells); $i++){
					if ($arrayvols[$posicio][1]==$arrayaparells[$i][$j]){
						echo "<option selected=\"selected\" value=$i>".$arrayaparells[$i][$j]."</option>";
					}else{
						echo "<option value=$i>".$arrayaparells[$i][$j]."</option>";				
					}
				}
				echo "</select>";			
				
			echo "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Data:</td><td><input type=\"text\" value=".$arrayvols[$posicio][2]." name=\"data\" readonly>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Durada:</td><td><input type=\"text\" value=".$arrayvols[$posicio][3]." name=\"durada\" readonly>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>NIF Pilot: </td><td>";	
				$j=0;		
				echo "<select name=\"nifpilot\">";
				for ($i=0; $i<count($arraypilot); $i++){
					if ($arrayvols[$posicio][4]==$arraypilot[$i][$j]){
						echo "<option selected=\"selected\" value=$i>".$arraypilot[$i][$j]."</option>";
					}else{
						echo "<option value=$i>".$arraypilot[$i][$j]."</option>";				
					}
				}
				echo "</select>";			
				
			echo "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td colspan=\"3\" id=\"envia\"><input type=\"submit\" name=\"actualitza\" value=\"Guarda\"></td>";
		echo "</tr>";
	echo "</table>";
	echo "</form>";
}
if (isset($_REQUEST['actualitza'])){
	$passok=altaPilot($_REQUEST); //Aquí la crida a la funció que hem tornarà 1 si ok o -x amb l'error corresponent
	
	if ($passok){
		$pos=$_REQUEST['posicio'];
		$arr=$_REQUEST;
		foreach($arr as $number){
			if ($number>4){
				$arrayaparells[$pos]=$arr;					
			}
		}
		$_SESSION['aparells']=$arrayaparells[$pos];
		
		header("Location: ./validacio.php?result=".$passok); //l'error el passem a validació que ens dirà ok, si tot ok o mal si falta algo
	}else{
		echo $posicio;
		header("Location: ./validacio.php?result=0");
	}
}
?>
</div>
