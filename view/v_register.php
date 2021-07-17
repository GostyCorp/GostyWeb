<div class="nine columns login">
    <h5>Register User</h5>
	<form method="POST" action="index.php?req=login&act=verifyRegister">
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
        <a class="button" href="index.php?req=login&act=login">>Login</a>
		<input type="reset" value=">Annuler">
	</form>
</div>