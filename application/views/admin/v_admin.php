<!DOCTYPE html>
<html>
<head>
	<title>Amin</title>
</head>
<body>

			<center>
	<table border="1">
		<tr>
			<td>Judul</td>
			<td>isi</td>
			<td>status</td>
			<td>Ganti Status</td>

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
            </td>
            <td><?php echo anchor('c_admin/edit_data/'.$k->id_pos,'Ganti'); ?></td>
		</tr>
		<?php } ?>
	</table>
			<a href="<?php echo site_url('c_login/logout')?>"><button>Logout</button></a>

</center>
</body>
</html>