<!DOCTYPE html>
<html>
<head>
	<title>Login Yoga</title>
</head>
<body>

<center>
	<h1>SilahKan Masuk Di Data Setuju Yoga</h1>
	<form action="<?php echo site_url('c_login/validasil') ?>" method="post">
		<p>
			<label>Username</label>
			<input type="text" name="username">
		</p>
		<p>
			<label>Password</label>
			<input type="password" name="password">
		</p>
		<p>
			<input type="submit" name="login" value="Log In">
		</p>
	</form>
</center>
</body>
</html>