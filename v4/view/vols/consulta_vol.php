<div id="alta">
	<p id="titols_accions">Consultar Vol</p>
<!--L'action ha de ser  $_SERVER['PHP_SELF']  ja que sino no reconeix la variable i dona error, abans estaba com echo $PHP_SELF;-->


<form id="consulta" method="post">		
	Tria el vol a Consultar:
	<select name="consultar">		
<?php 	
		$j=0;		
		for ($i=0; $i<count($arrayvols); $i++){
			echo "<option value=$i>".$arrayvols[$i][$j]."</option>";				
		}
		echo "</select>";	
		echo "<br><input type=\"submit\" name=\"mostra\" value=\"Mostrame'l\">";	
?>
</form>
<?php 
if (isset($_REQUEST['mostra'])){
	$posicio=$_REQUEST['consultar'];
	echo "<table>";
		echo "<input type=\"hidden\" name=\"posicio\" value=$posicio >";
		echo "<tr><td colspan=2 id=\"taula_titol\">Dades Vol</td></tr>";
		echo "<tr>";
			echo "<td>Id vol: </td><td><input type=\"text\" name=\"idvol\" value=".$arrayvols[$posicio][0]." readonly></td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Id aparell: </td><td><input type=\"text\" value=".$arrayvols[$posicio][1]." name=\"idaparell\" readonly>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Data:</td><td><input type=\"text\" value=".$arrayvols[$posicio][2]." name=\"data\" readonly>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Durada:</td><td><input type=\"text\" value=".$arrayvols[$posicio][3]." name=\"durada\" readonly>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>NIF Pilot:</td><td><input type=\"text\" value=".$arrayvols[$posicio][4]." name=\"nifpilot\" readonly></td>";
		echo "</tr>";
	echo "</table>";

}
?>
</div> 
