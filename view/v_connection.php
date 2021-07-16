<div class="nine columns login">
    <h5>Identification utilisateur</h5>
	<form method="POST" action="index.php?req=login&act=verify">
		<p>
			<label>Login : <input type="text" name="login"  size="30" maxlength="45"></label>
		</p>
		<p>
			<label>Password : <input type="password"  name="pwd" size="30" maxlength="45"></label>
		</p>
		<input type="submit" value="Valider">
		<input type="reset" value="Annuler">
	</form>
</div>