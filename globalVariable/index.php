
<?php 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
	setcookie("login", $_POST["login"], time() + 24*3600, null, null, false, true);
	setcookie("password", $_POST["password"], time() + 24*3600, null, null, false, true);
	var_dump($_COOKIE);
}
?>
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
		<a href="index.php?page=otherPage">Autre page.</a>
		<a href="index.php?page=exercise3FormLogin">Login</a>
		<?php 
		if(isset($_GET['page'])){
			include __DIR__ ."/" . $_GET['page'] .".php";
		}else{
			var_dump($_COOKIE['nom'], $_COOKIE['prenom'], $_COOKIE['age']);
			include __DIR__ . '/infosClient.php';
		}
		?>
	</div>
</body>
</html>