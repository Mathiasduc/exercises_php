<div>
	<?php 
	/*$months = ["janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre"];
	$months[7]= "août" ;*/
	$dept = [
	02 => "Aisne",
	59 => "Nord",
	60 => "Oise",
	62 => "Pas-de-Calais",
	80 => "Somme" ,
	51 => "Reims"
	];	
	foreach ($dept as $key => $value) {
		echo "$value <br>";
	}

	?>
</div>