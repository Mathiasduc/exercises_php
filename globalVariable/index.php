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
		<div class="infos">	
			
			<h3>Votre configuration:</h3>
			<span>
				<?= $_SERVER['HTTP_USER_AGENT']?>
			</span>
		</div>
		<div>
			<h3>Votre adresse IP:</h3>
			<span>
				<?= $_SERVER['REMOTE_ADDR']?>
			</span>
		</div>
		<div>
			<h3>Nom du serveur:</h3>
			<span>
				<?= $_SERVER['SERVER_NAME']?>
			</span>
		</div>
	
	</div>
	
</body>
</html>