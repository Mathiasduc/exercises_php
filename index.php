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
	function isAgeSet(){
		if($_GET['age']){
			echo $_GET['age'];
		}
	}
	isAgeSet();
	?>
	
</body>
</html>