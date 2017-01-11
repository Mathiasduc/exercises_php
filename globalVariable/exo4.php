<?php 
	setcookie("login", "login modifié", time() + 24*3600, null, null, false, true);
	setcookie("password", "password modifié", time() + 24*3600, null, null, false, true);
 ?>

 <div>
 	<h3>Les cookies on été modifié! <br>Les modif seront visible au prochain chargement de page</h3>
 </div>

 <?php 
 var_dump($_COOKIE) ?>