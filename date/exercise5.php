<?php
	$mayTimestamp = strtotime("16 may 2016");
	$diffTime = time() - $mayTimestamp; 
	$diffDay = intval($diffTime / (24*60*60));
 ?>

<h3>Jours depuis le 16 mai 2016: <?php echo $diffDay; ?></h3>