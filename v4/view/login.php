<?php
include_once 'header.php';
?>
<h1>Login d'usuari</h1>
<div id="alta">
<form method="post" action="">
	<table id="taula_login">
			<tr><td colspan=2 id="titol_login">Login Usuari</td></tr>
			<tr>
				<td>Usuari: </td><td><input type="text" name="user"></td>
			</tr>
			<tr>
				<td>Password: </td><td><input type="password" name="pass" ></td>
			</tr>
			<tr>
			<td colspan="2" id="envia"><input type="submit" name="submit" value="Login"></td>
			</tr>
	</table>
</form>

<?php
$usuari=$_REQUEST['user'];
$contras=$_REQUEST['pass'];
$trobat=false;
if (isset($_REQUEST['submit'])){
	for ($i = 0; $i<count($arrayusuaris); $i++){
		if(($arrayusuaris[$i][0]==$usuari)&&($arrayusuaris[$i][1]==$contras)){
			$_SESSION["user"] = $arrayusuaris[$i][0];
			$_SESSION["pass"] = $arrayusuaris[$i][1];
			$_SESSION["nomusuari"] = $arrayusuaris[$i][2];
			$_SESSION["grup"] = $arrayusuaris[$i][3];
			$trobat=true;
			break;
			die;
		}
	}
	if ($trobat==true){
		header("Location: ../index.php");
	}else{
		echo "<center>L'usuari no existeix o no és correcte</center>";
	}
}
?>
</div>
<?php
include 'footer.php'; 
?>
