<?php 
	
 ?>
<h3>Timestamp now :<?=date("Y-m-d H:i:s") . " ou bien : " . time();?></h3>

<h3>TimeStamp last week :<?= date("Y-m-d H:i:s",time()-7*25*60*60) . ' ou bien: '. (time() + (-7*24*60*60));?></h3>

<h3>TimeStamp mardi 2 août 2016 à 15h00:<?=
date("Y-m-d H:i:s",strtotime("tuesday 2 august 2016 15:00"))
. " ou bien: ".
strtotime("tuesday 2 august 2016 15:00");
?></h3>