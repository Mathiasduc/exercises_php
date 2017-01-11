
<div class="form logs" >
	<form method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
		<div class="login">
			<label for="login">Login:</label>
			<input name="login" type="text">
		</div>
		<div class="password">
			<label for="password">Password</label>
			<input name="password" type="password">
		</div>
		<button>Envoyer</button>
	</form>
</div>