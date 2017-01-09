<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Forms</title>
</head>
<body>
	<h1>Les formulaires :</h1>
	<?php
	function isPdf(){
		return preg_match_all('/^.*\.(pdf|PDF)$/',$_FILES["file"]["name"]);
	}

	if ($_GET || $_POST|| $_FILES) {
		if(isPdf()){
			var_dump($_GET , $_POST ,$_FILES['file']["name"]);
		}
		else{
			echo "<h1>ERROR DE  TYPE DE FICHIER :  seulement les fichiers pdf sont accepter</h1>";
		}
	}
	else{
		include 'forms.php';
	}
	?>

	
</body>
</html>