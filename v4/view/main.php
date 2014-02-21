<div id="gestio">
<?php
if ($grup==0){
	header("Location: login.php");
}else
if ($grup==1){
	if(isset($_GET['pilots'])){
		include 'pilots/pilots.php';
	}else if(isset($_GET['aparells'])){
		include 'aparells/aparells.php';
	}else if(isset($_GET['consums'])){
		include 'includes/consums.php';
	} else if(isset($_GET['vols'])){
		include 'vols/vols.php';
	} else if(isset($_GET['costos'])){
		include 'includes/costos.php';
	} 
}else
if ($grup==2){
	if(isset($_GET['pilots'])){
		include 'pilots/pilots.php';
	}else if(isset($_GET['aparells'])){
		include 'aparells/aparells.php';	
	} else if(isset($_GET['vols'])){
		include 'vols/vols.php';
	} 
}

?>

