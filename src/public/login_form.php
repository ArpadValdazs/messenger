	<?php echo '<p>Регистрация</p>
	<form action="auth.php" method="post" id="reg" onchange="authCheck()">
		<input type="text" placeholder="Name" name="name" id="auth_name"><br/>
		<input type="email" placeholder="Email" name="email" id="auth_email"><br/>
		<input type="password" placeholder="Password" name="password" id="auth_password"><br/>
		<input type="submit" value="Зарегистрировать" disabled="disabled" id="submit">
	</form>
	<p>Вход</p>
	<form action="login.php" method="post" id="login">
		<input type="email" placeholder="Email" name="email"><br/>
		<input type="password" placeholder="Password" name="password"><br/>
		<input type="submit" value="Войти">
	</form>' ?>