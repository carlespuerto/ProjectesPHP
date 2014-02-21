<div id="alta">
	<p id="titols_accions">Llista pilots</p>
		
	<table id="llistats">
		<tr><th></th><th>NIF</th><th>Nom</th><th>Cognoms</th><th>Telèfon</th><th>Adreça</th><th>Hores_Vol</th><th>Aterratges</th></tr>
<?php 
		$totsPilots = $aeroport->getPilots();
		$z=1;
		for ($i=0; $i<count($totsPilots); $i++){		
			if ($totsPilots[$i]->getActiu()==true){
				echo "<tr><td>".($z)."</td>";
				$z++;
				$atributs=$totsPilots[$i]->mostraAtributsPi();
				for ($j=0; $j<count($atributs); $j++){
					echo "<td>".$atributs[$j]."</td>";
				}
			}
			echo "</tr>";
		}
?>	
	</table>


</div> 
