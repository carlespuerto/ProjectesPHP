<script>
window.onbeforeunload = function exitAlert(){
	var textOut = "Les dades es perdran.Voleu sortir de la pàgina?";
	return textOut;
}
</script>
<div id="alta">
	<p id="titols_accions">Alta aparell</p>
<form id="form_alta" method="post" action="../validacions/valida_aparell.php" >
	<table>
		<tr><td colspan=3 id="taula_titol"></td></tr>
		<tr>
			<td>Id Aparell: </td><td><input type="text" name="idaparell" onblur="validaIdAp(this);" /><label id="apId"></label></td>
		</tr>
		<tr>
			<td>Longitud: </td><td><input type="text" name="longitud" onblur="validaLong(this);" /></td><td>metres<label id="apLon"></label></td>
		</tr>
		<tr>
			<td>Pes: </td><td><input type="text" name="pes" onblur="validaPes(this);" /></td><td>Kg.<label id="apPes"></label></td>
		</tr>
		<tr>
			<td>Consum x hora:</td><td><input type="text" name="consum" onblur="validaCons(this);" /></td><td>litres<label id="apCons"></label></td>
		</tr>
		<tr>
			<td colspan="3" id="envia"><input type="submit" name="submit" value="Guarda" onclick="window.onbeforeunload=null;"/></td>
		</tr>	
	</table>
</form> 
</div>
<div id="mostra">

</div>
