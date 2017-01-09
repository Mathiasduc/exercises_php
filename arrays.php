<div>
	<?php 
	$months = ["janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre"];
	$months[7]= "août" ;
	/*$dept = ["Aisne"=> "02",
	59 => "Nord",
	"Oise" => "60",
	"Pas-de-Calais" => "62",
	"Somme" => "80",
	51 => "Reims"];
	var_dump($dept[51]);	*/
	foreach ($months as $value) {
		echo $value . "<br>";	
	}
	?>
</div>