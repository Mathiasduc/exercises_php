<?php 
setcookie('nom', 'dumoulin', time() + 2*24*3600, null, null, false, true);
setcookie('prenom', 'caroline', time() + 2*24*3600, null, null, false, true);
setcookie('age', '24', time() + 2*24*3600, null, null, false, true);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Globals</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="center frame">
		<h1>Les variables globales :</h1>
			<a href="index.php?page=other">Autre page.</a>
		<?php 
			if($_GET['page'] === "other"){
				include __DIR__ ."/otherPage.php";
			}else{
				var_dump($_COOKIE['nom'], $_COOKIE['prenom'], $_COOKIE['age']);
				include __DIR__ . '/infosClient.php';
			}
		 ?>

	</div>
</body>
</html>