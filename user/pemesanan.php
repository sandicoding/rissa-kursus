<?php
	require_once "view/header.php";

	// if(isset($_POST['ok'])) {
	// 	$in = $_POST['cekin'];
	// 	$out = $_POST['cekout'];
	// 	$type = $_POST['tipex'];

	// 	$sqlxy = $pdo->query("SELECT * FROM kursus WHERE tipe='$type'");
	// 	$dataxy = $sqlxy->fetch();
	// 	$idkamarxy = $dataxy['idkursus'];
	// 	$tipexy = $dataxy['tipe'];
	// 	$bidangxy = $dataxy['bidang'];
		
	// 	$gambarxy = $dataxy['gambar'];
	// 	$hargaxy = $dataxy['harga'];
	// 	$hargafxy = number_format($hargaxy, 0, ',', '.');

		
	// }
		
		date_default_timezone_set("Asia/Makassar");

		$today = new DateTime();
		$tglpesan = $today->format('Y-m-d H:i:s') .PHP_EOL;
		$today->add(new DateInterval('PT5H'));
		$jamex = $today->format('Y-m-d H:i:s') .PHP_EOL;

if(isset($_POST['klik'])) {
		$ambilx = $_GET['id'];

		// $sqlx = $pdo->query("SELECT * FROM kursus WHERE idkursus='$ambilx'");
		$sql2 = $pdo->query("SELECT tb_kursus.idkursus, tb_kursus.bidang, tb_kursus.gambar, tb_kursus.harga, tb_jenis_seni.nama as nama, tb_jenis_seni.id from tb_kursus INNER JOIN tb_jenis_seni ON tb_kursus.id_tipe = tb_jenis_seni.id WHERE idkursus='$ambilx'");

		$datax = $sql2->fetch();
		$idkursus = $datax['idkursus'];
		$tipe = $datax['nama'];
		$id_jenis = $datax['id'];
		$bidang = $datax['bidang'];
		
		$gambar = $datax['gambar'];
		$harga = $datax['harga'];
		$hargaf = number_format($harga, 0, ',', '.');

		
}
?>
		<div id="imglog">
			<h1>Konfirmasi Pendaftaran Kursus</h1>
		</div>
		<div class="pemesanan">
		<div id="pemesanan2">
			<form method="post" action="../fungsi/prosespesan" name="cekstok">
			<table width="380px">
			<tr align="center">
				<td colspan="2" style="width:300px;"><img src="../simpangambar/<?php echo $gambar?>" width='200px' height='150px' style="border:5px solid #B40301;"></td>
			</tr>
			<tr>
				<td>Jenis Seni</td>
				<td>
				<!-- <input type="text" name="tipe" readonly="true" value=""> -->
				<select name="tipe" required="required" readonly="true" style="font-weight: bold; border: 2px solid #11022a;">
						<!-- <option selected="selected" disabled="disabled">--Pilih--</option> -->
						<?php  
						$sql = $pdo->query("SELECT * FROM tb_jenis_seni");
                        while ($caridata = $sql->fetch()) {
                        $name = $caridata['nama']; 
						$ids = $caridata['id'];
						
						?>
						<?php if($ids == $id_jenis) { ?>
						<option selected="selected" value="<?= $tipe ?>"   ><?= $tipe ?></option>
						<?php }else{ ?>
						<option  value="<?= $ids ?>"   ><?= $name ?></option>
						<?php } ?>
						<?php } ?>
						
						</select>
					</td>
					<input type="hidden" name="idkursus" readonly="true" value="<?php echo $idkursus ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kursus</td>
				<td><input type="text" name="bidang" readonly="true" value="<?php echo $bidang ?>">
				<input type="hidden" name="stok" readonly="true" value=" <?php echo $stok?>"></td>
			</tr>
			<tr>
				<td>Harga </td>
				<td><input type="text" name="harga" readonly="true" value="<?php echo $harga ?>">
				<input type="hidden" name="stok" readonly="true" value=" <?php echo $stok?>"></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td><input type="text" readonly="true"  name="nama" value="<?php echo $nama ?>">
					<input type="hidden" name="idtamu" readonly="true" value="<?php echo $id ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" readonly="true"  name="alamat" value="<?php echo $alamat?>"></td>
			</tr>
			<tr>
				<td>No. Telepon</td>
				<td><input type="text" readonly="true"  name="telepon" value="<?php echo $telepon ?>"></td>
			</tr>
		
			<tr>
				<td></td>
				<td><button type="submit" style="width:100px;background:#3279b8; color:white;font-weight:bold;padding:5px;border:2px solid #B40301; cursor: pointer; ">Konfirmasi Daftar</button></td>
			</tr>
		</table>
		</form>
		</div>
		</div>
</div>

<?php
	require_once "view/footer.php"
?> -->