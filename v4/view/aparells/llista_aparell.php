<div id="alta">
	<p id="titols_accions">Llista Aparells</p>

	<table id="llistats">
		<tr><th></th><th>ID Aparell</th><th>Longitud</th><th>Pes</th><th>Consum X Hora</th></tr>
<?php 	
		$totsAparells = $aeroport->getAparells();
		$z=1;
		for ($i=0; $i<count($totsAparells); $i++){			
			if ($totsAparells[$i]->getActiu()==true){
				echo "<tr><td>".($z)."</td>";
				$z++;
				$atributs=$totsAparells[$i]->mostraAtributsAp();
				for ($j=0; $j<count($atributs); $j++){
					echo "<td>".$atributs[$j]."</td>";
				}
			}
			echo "</tr>";
		}
?>	
	</table>


</div> 
