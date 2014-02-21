<script>	
function mostraAvio(mostraAp){
	var fi1=window.open("","Característiques Aparell","toolbar=no, scrollbars=no, titlebar=no, resizable=no, top=50, left=450, width=400, height=400");
	fi1.document.body.innerHTML = '';
	fi1.document.write("<h2>Característiques Aparell</h2>");
	fi1.document.write("<b>Model: </b>"+mostraAp[0]+"<br>");
	fi1.document.write("<b>Longitud: </b>"+mostraAp[1]+" metres<br>");
	fi1.document.write("<b>Pes: </b>"+mostraAp[2]+" kg.<br>");
	fi1.document.write("<b>Consum: </b>"+mostraAp[3]+" llitres<br>");
	fi1.document.write("<input type=button name=tanca value=Tancar onclick=window.close();>");
	fi1.focus();
	
}

function mostraPilot(mostraPi){
	var fi2=window.open("","Característiques Pilot","toolbar=no, scrollbars=no, resizable=no, top=50, left=550, width=400, height=400");
	fi2.document.body.innerHTML = '';
	fi2.document.write("<h2>Característiques Pilot</h2>");
	fi2.document.write("<b>DNI: </b>"+mostraPi[0]+"<br>");
	fi2.document.write("<b>Nom: </b>"+mostraPi[1]+"<br>");
	fi2.document.write("<b>Cognoms: </b>"+mostraPi[2]+"<br>");
	fi2.document.write("<b>Telefon: </b>"+mostraPi[3]+"<br>");
	fi2.document.write("<b>Adreça: </b>"+mostraPi[4]+"<br>");
	fi2.document.write("<b>Aterratges: </b>"+mostraPi[5]+"<br>");
	fi2.document.write("<b>Hores de vol: </b>"+mostraPi[6]+"<br>");
	fi2.document.write("<input type=button name=tanca value=Tancar onclick=window.close();>");
	fi2.focus();
	
}
</script>
<div id="alta">
	<p id="titols_accions">Llista Vols</p>

	<table id="llistats">
		<tr><th></th><th>ID Vol</th><th>ID Aparell</th><th>Data_Vol</th><th>Durada_Vol</th><th>Nif Pilot</th></tr>
	<?php 	
			$totsVols = $aeroport->getVols();
			$z=1;
			for ($i=0; $i<count($totsVols); $i++){			
				if ($totsVols[$i]->getActiu()==true){
					echo "<tr><td>".($z)."</td>";
					$z++;
					$atributs=$totsVols[$i]->mostraAtributs();
					for ($j=0; $j<count($atributs); $j++){
						if($j==1){
							$mosAp=$aeroport->agafaUnAparell($atributs[$j])->mostraAtributsAp();														
							?>				
							<script>var enviar1=<?php echo json_encode($mosAp);?></script>			
							<td onmouseover="mostraAvio(enviar1);"><?php echo $atributs[$j]; ?></td>
						<?php
						}else if($j==4){
							$mosPi=$aeroport->agafaUnPilot($atributs[$j])->mostraAtributsPi();														
							?>				
							<script>var enviar2=<?php echo json_encode($mosPi);?></script>			
							<td onmouseover="mostraPilot(enviar2);"><?php echo $atributs[$j]; ?></td>
						<?php
						}else{
							echo "<td>".$atributs[$j]."</td>";
						}
					}
				}
			echo "</tr>";
		}
	?>	
	</table>

	
</div> 
