<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Param urls</title>
</head>
<body>
	<div>Pratiquons les queries!</div>	
	<?php

	/*function test(){
		if($_GET['nom'] && $_GET['prenom']){
			echo $_GET['nom'] ." ". $_GET['prenom'];
		}
	}*/
	
	function isAllSet(){
		if($_GET['dateDebut'] && $_GET['dateFin']){
			echo $_GET['dateDebut'] ." ". $_GET['dateFin'];
		}
	}
	isAllSet();
	?>
	
</body>
</html>