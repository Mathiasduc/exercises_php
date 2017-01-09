<div>
	<?php 
	function hello($gender, $age){
		if ($gender === "Homme") {
			if($age > 18){
				return "Vous êtes un homme et vous êtes majeur";
			}else{
				return "Vous êtes un homme et vous êtes mineur";
			}
		}
		elseif($gender === "female"){
			if ($age > 18) {
				return "Vous êtes une femme et vous êtes majeur";
			}else{
				return "Vous êtes une femme et vous êtes mineur";
			}
		}else{
			return "error";
		}
	}
	var_dump(hello("Homme",12	));
	?>	
</div>