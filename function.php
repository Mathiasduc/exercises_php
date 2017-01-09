<div>
	<?php 
		function numCompare($num1, $num2){
			if($num1 >$num2){
				return "Le premier nombre est plus grand ";
			}elseif ($num2 > $num1) {
				return "Le premier nombre est plus petit";
			}else{
				return "Les deux nombres sont identiques";
			}
		}
		var_dump(numCompare(10,10));
	 ?>	
</div>