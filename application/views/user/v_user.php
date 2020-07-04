<!DOCTYPE html>
<html>
<head>
	<title>user</title>
</head>
<body>
	<center>
	<form action="<?php echo site_url('c_user/simpan')?>" method="post">
				<p>
					<label>Judul : </label>
					<input type="text" name="judul" placeholder="Masukkan judul">
				</p>
				<p>
					<label>Isi  :</label>
					<input type="text" name="isi" placeholder="Masukkan Isi">
				</p>
				<p>
					<input type="submit" name="save" value="Simpan">
				</p>
			</form>
<a href="<?php echo site_url('c_login/logout')?>"><button>Logout</button></a>
</center>
</body>
</html>