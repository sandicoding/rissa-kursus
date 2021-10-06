<?php
	require_once "view/header.php";
?>

	<aside>
		<center>
		<div id="formedit">
		<h3>Edit Tersedia Pelatihan</h3>

		<?php
			include "fungsi/koneksi.php";
			$ambil = $_GET['id'];
			$sql = $pdo->query("SELECT * FROM stokkursus WHERE idkursus='$ambil'");
			$data = $sql->fetch();
			$id = $data['idkursus'];
			$tipe = $data['tipe'];
			$bidang = $data['bidang'];
			$stok = $data['stok'];
		?>

		<form method="post" action="fungsi/proseseditstok" enctype="multipart/form-data">
			<table>
				<tr>
					<td>ID Pelatihan</td>
					<td><input type="text" readonly="true" name="id" value="<?php echo $id ?>"></td>
				</tr>
				<tr>
					<td>Level Pelatihan</td>
					<td><input type="text" readonly="true" name="edittipe" value="<?php echo $tipe ?>"></td>
				</tr>
				<tr>
				<tr>
					<td>Bidang Pelatihan</td>
					<td><input type="text" readonly="true" name="editbidang" value="<?php echo $bidang ?>"></td>
				</tr>
				<tr>
					<td>Tersedia</td>
					<td><input type="text" required="required" name="editstok" value="<?php echo $stok ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<button type="submit" style="width:90px;background:#B40301; color:white;font-weight:bold;padding:4px;border:2px solid #B40301;">Update</button>
						<a href="stokkursus"><input type="button" style="width:90px;background:black;color:white;font-weight:bold;padding:4px;border:2px solid red;" value="Batal"></a>
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