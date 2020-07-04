<!DOCTYPE html>
<html>
<head>
	<title>Data User</title>
</head>
<body>

<center>
	<table border="1">
		<tr>
			<td>Judul</td>
			<td>isi</td>
			<td>status</td>
		</tr>
		<?php foreach ($user as $k) { ?>
			
		
		<tr>
			<td><?php echo $k->judul ?></td>
			<td><?php echo $k->isi ?></td>
			<td><?php if($k->status == "ts"){
                            echo "pending";
                        }else{
                            echo "Setuju";
                        } ?>
		</tr>
		<?php } ?>
	</table>
</center>
</body>
</html>