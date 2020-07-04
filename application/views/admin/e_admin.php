<!DOCTYPE html>
<html>
<head>
	<title>user</title>
</head>
<body>
	<center>
		<?php foreach($user as $u){ ?>
	<form action="<?php echo site_url('c_admin/update')?>" method="post">
				<p>
					<label>Judul : </label>
					<input type="text" name="id_pos" readonly value= "<?php echo $u->id_pos ?>" >
				</p><p>
					<label>Judul : </label>
					<input type="text" name="judul" placeholder="Masukkan judul" value="<?php echo $u->judul ?>">
				</p>
				<p>
					<label>Isi  :</label>
					<input type="text" name="isi" placeholder="Masukkan Isi" value="<?php echo $u->isi ?>">
				</p>
				<p>
					<label>Status</label>
					<select name="status">
						<option value="<?php echo $u->status ?>"><?php echo $u->status ?></option>
						<option value="s">Setuju</option>
						<option value="ts">Tidak Setuju</option>
					</select>
				<p>
					<input type="submit" name="save" value="Simpan">
				</p>
			</form>
			<?php } ?>
<a href="<?php echo site_url('c_login/logout')?>"><button>Logout</button></a>
</center>
</body>
</html>