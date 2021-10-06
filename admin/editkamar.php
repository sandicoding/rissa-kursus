<?php
	require_once "view/header.php";
?>

	<aside>
		<center>
		<div id="formedit">
		<h3>Ubah Data Kursus</h3>

		<?php
			include "fungsi/koneksi.php";
			$ambil = $_GET['id'];
			$sql = $pdo->query("SELECT * FROM kursus WHERE idkursus='$ambil'");
			$data = $sql->fetch();
			$id = $data['idkursus'];
			$tipe = $data['tipe'];
			$bidang = $data['bidang'];
			
			$harga = $data['harga'];
			$gambar = $data['gambar'];
		?>

		<form method="post" action="fungsi/prosesedit" enctype="multipart/form-data">
			<table>
				<tr>
					<td>ID Kursus</td>
					<td><input type="text" required="required" name="id" value="<?php echo $id ?>"></td>
				</tr>
				<tr>
					<td>Jenis Seni</td>
					<td><select name="edittipe" required="required"  selected="<?php echo $tipe ?>" style="font-weight: bold; border: 2px solid #B40301">
						<option selected="selected" hidden="hidden">--Pilih--</option>
						<option>Seni Musik</option>
						<option>Seni Tari</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Jenis Kursus</td>
					<td><input type="text" required="required" name="editbidang" value="<?php echo $bidang ?>"></td>
				</tr>
				<tr>
				
				<tr>
					<td>Harga</td>
					<td><input type="text" required="required" name="editharga" value="<?php echo $harga ?>"> </td>
				</tr>
				<tr>
					<td></td>
					<td><img src="../simpangambar/<?php echo $gambar?>" width='250'></td>
				</tr>
				<tr>
					<td>Gambar</td>
					<td><input type="file" name="editgambar"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<button type="submit" style="width:100px;background:#B40301; color:white;font-weight:bold;padding:4px;border:2px solid #B40301;">Update</button>
						<a href="datakamar"><input type="button" style="width:100px;background:black;color:white;font-weight:bold;padding:4px;border:2px solid red;" value="Batal"></a>
					</td>
				</tr>
			</table>
		</form>
		</div>
		</center>
	</aside>

<?php
	require_once "view/footer.php"
?>