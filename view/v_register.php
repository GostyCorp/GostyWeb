<div class="nine columns login">
    <h4>Register User</h4>
	<form method="POST" action="verifyRegister">
		<p>
			<label>Login : <input type="text" name="login"  size="30" maxlength="45" required></label>
		</p>
        <p>
			<label>email : <input type="email" name="email"  size="30" maxlength="45" required></label>
		</p>
		<p>
			<label>Password : <input type="password"  name="pwd" size="30" maxlength="45" required></label>
		</p>
        <p>
			<label>Verify : <input type="password"  name="vfpwd" size="30" maxlength="45" required></label>
		</p>
		<input type="submit" value=">Register">
        <a class="button" href="Login">>Login</a>
		<input type="reset" value=">Annuler">
	</form>
</div>