<script>
window.onbeforeunload = function exitAlert(){
	var textOut = "Les dades es perdran.Voleu sortir de la pàgina?";
	return textOut;
}
</script>
<div id="alta">
	<p id="titols_accions">Alta pilot</p>
<form id="form_alta" method="post" action="../controller/valida_pilot.php">
	<table>
		<tr><td colspan=2 id="taula_titol"></td></tr>
		<tr>
			<td>NIF: </td><td><input type="text" name="nif" placeholder="format: 12345678L" onblur="validaNif(this);" /><label id="pildni"></label></td>
		</tr>
		<tr>
			<td>Nom: </td><td><input type="text" name="nom" onblur="validaNom(this);"/><label id="pilnom"></td>
		</tr>
		<tr>
			<td>Cognoms: </td><td><input type="text" name="cognoms" onblur="validaCognoms(this);"/><label id="pilcog"></td>
		</tr>
		<tr>
			<td>Telèfon:</td><td><input type="text" name="telefon" onblur="validaTelefon(this);"/><label id="piltel"></td>
		</tr>
		<tr>
			<td>Adreça:</td><td><input type="text" name="adreça" onblur="validaAdreca(this);" /><label id="piladr"></td>
		</tr>
		<tr>
			<td>Número d'aterratges:</td><td><input type="text" name="aterratges" onblur="validaAterratges(this);" /><label id="pilate"></td>
		</tr>
		<tr>
			<td>Hores de vol:</td><td><input type="text" name="horesvol" onblur="validaHores(this);" /><label id="pilhor"></td>
		</tr>
		<tr>
			<td colspan="2" id="envia"><input type="submit" name="submit" value="Guarda" onclick="window.onbeforeunload=null;" /></td>
		</tr>	
	</table>
</form> 
</div>
<div id="mostra">

</div>
