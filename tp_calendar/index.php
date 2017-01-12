<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tp Calendar!</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="center frame">
		<form action="" method="post">
			<h2>Choisissez un calendrier a generer:</h2>
			<div>
				<label for="month">Mois:</label>
				<input name="month" type="month">
			</div>
			<input type="submit" value="Envoyer" >
		</form>
		<div>
			<table>
				<tr>
					<th>Dimanche</th>
					<th>Lundi</th>
					<th>Mardi</th>
					<th>Mercredi</th>
					<th>Jeudi</th>
					<th>Vendredi</th>
					<th>Samedi</th>
				</tr>
				<tr>
					<?php 
					if(isset($_POST)){
						$selection = strtotime($_POST['month']);
						$firstDay = date('w', $selection);
						$numbersOfDays = date('t', $selection);
						$nbrOfLoop = 0;
						$nbrOfPrintedDay = 1;
						while($nbrOfLoop < $firstDay + $numbersOfDays){
							if($nbrOfLoop < $firstDay){
								echo "<th></th>";
							}else{
								if ($nbrOfLoop % 7 === 0){
									echo "<tr></tr>";
								}
								echo "<th>$nbrOfPrintedDay</th>";
								$nbrOfPrintedDay++;	
							}
							$nbrOfLoop++;
						}
					}
					?>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>