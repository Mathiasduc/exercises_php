<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Forms</title>
</head>
<body>
<h1>Les formulaires :</h1>
	<?php
	if ($_GET || $_POST) {
		var_dump($_GET , $_POST);
	}else{
		include 'forms.php';
	}
	?>

	
</body>
</html>