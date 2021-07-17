<div class="nine columns login">
    <h4>Login User</h4>
	<form method="POST" action="index.php?req=login&act=verifyLogin">
		<p>
			<label>Login : <input type="text" name="login"  size="30" maxlength="45" required></label>
		</p>
		<p>
			<label>Password : <input type="password"  name="pwd" size="30" maxlength="45" required></label>
		</p>
		<input type="submit" value=">Login">
		<a class="button" href="index.php?req=login&act=register">>Register</a>
		<input type="reset" value=">Annuler">
	</form>
</div>