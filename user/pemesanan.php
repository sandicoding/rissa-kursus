<?php
	require_once "view/header.php";

	if(isset($_POST['ok'])) {
		$in = $_POST['cekin'];
		$out = $_POST['cekout'];
		$type = $_POST['tipex'];

		$sqlxy = $pdo->query("SELECT * FROM kursus WHERE tipe='$type'");
		$dataxy = $sqlxy->fetch();
		$idkamarxy = $dataxy['idkursus'];
		$tipexy = $dataxy['tipe'];
		$bidangxy = $dataxy['bidang'];
		
		$gambarxy = $dataxy['gambar'];
		$hargaxy = $dataxy['harga'];
		$hargafxy = number_format($hargaxy, 0, ',', '.');

		
	}
		
		date_default_timezone_set("Asia/Makassar");

		$today = new DateTime();
		$tglpesan = $today->format('Y-m-d H:i:s') .PHP_EOL;
		$today->add(new DateInterval('PT5H'));
		$jamex = $today->format('Y-m-d H:i:s') .PHP_EOL;

if(isset($_POST['klik'])) {
		$ambilx = $_GET['id'];

		$sqlx = $pdo->query("SELECT * FROM kursus WHERE idkursus='$ambilx'");
		$datax = $sqlx->fetch();
		$idkursus = $datax['idkursus'];
		$tipe = $datax['tipe'];
		$bidang = $datax['bidang'];
		
		$gambar = $datax['gambar'];
		$harga = $datax['harga'];
		$hargaf = number_format($harga, 0, ',', '.');

		
}
?>
		<div id="imglog">
			<h1>Konfirmasi Pendaftaran Kursus</h1>
		</div>
		<div id="pemesanan">

			<div id="pesankamar2">
<?php
	if(isset($_POST['ok'])) {
?>
			<form method="post" action="../fungsi/prosespesan" name="cekstok">
			<table width="380px">
			<tr align="center">
				<td colspan="2" style="width:300px;"><img src="../simpangambar/<?php echo $gambarxy?>" width='200px' height='150px' style="border:5px solid #B40301;"></td>
			</tr>
			<tr>
				<td>Tipe Pelatihan</td>
				<td>
				<input type="text" name="tipe" readonly="true" value="<?php echo $tipexy ?>">
					<input type="hidden" name="idkursus" readonly="true" value="<?php echo $idkamarxy ?>"></td>
			</tr>
			<tr>
				<td>Bidang Pelatihan</td>
				<td><input type="text" name="bidang" readonly="true" value="<?php echo $bidang ?>">
				<input type="hidden" name="stok" readonly="true" value=" <?php echo $stokyx?>"></td>
			</tr>
			<tr>
				<td>Harga / Latihan</td>
				<td><input type="text" name="harga" readonly="true" value="<?php echo $hargaxy ?>">
				<input type="hidden" name="stok" readonly="true" value=" <?php echo $stokyx ?>"></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td><input type="text" name="nama" value="<?php echo $nama ?>">
					<input type="hidden" name="idtamu" readonly="true" value="<?php echo $id ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $alamat?>"></td>
			</tr>
			<tr>
				<td>No. Telepon</td>
				<td><input type="text" name="telepon" value="<?php echo $telepon ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" style="width:100px;background:#B40301; color:white;font-weight:bold;padding:5px;border:2px solid #B40301;">Booking Pelatihan</button></td>
			</tr>
		</table>
		</form>
<?php 
	}
	
	if(isset($_POST['klik'])) {
?>

			
			<form method="post" action="../fungsi/prosespesan" name="cekstok">
			<table width="380px">
			<tr align="center">
				<td colspan="2" style="width:300px;"><img src="../simpangambar/<?php echo $gambar?>" width='200px' height='150px' style="border:5px solid #B40301;"></td>
			</tr>
			<tr>
				<td>Jenis Seni</td>
				<td>
				<input type="text" name="tipe" readonly="true" value="<?php echo $tipe ?>">
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
				<td><input type="text" name="nama" value="<?php echo $nama ?>">
					<input type="hidden" name="idtamu" readonly="true" value="<?php echo $id ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $alamat?>"></td>
			</tr>
			<tr>
				<td>No. Telepon</td>
				<td><input type="text" name="telepon" value="<?php echo $telepon ?>"></td>
			</tr>
		
			<tr>
				<td></td>
				<td><button type="submit" style="width:100px;background:#3279b8; color:white;font-weight:bold;padding:5px;border:2px solid #B40301; cursor: pointer; ">Konfirmasi Daftar</button></td>
			</tr>
		</table>
		</form>
<?php  
	}
?>
		
		</center>
		</div>

<?php
	require_once "view/footer.php"
?>







<!-- <?php
	require_once "view/header.php";

	if(isset($_POST['ok'])) {
		$in = $_POST['cekin'];
		$out = $_POST['cekout'];
		$type = $_POST['tipex'];

		$sqlxy = $pdo->query("SELECT * FROM kursus WHERE tipe='$type'");
		$dataxy = $sqlxy->fetch();
		$idkamarxy = $dataxy['idkursus'];
		$tipexy = $dataxy['tipe'];
		$bidangxy = $dataxy['bidang'];
		$jumlahxy = $dataxy['jumlah'];
		$gambarxy = $dataxy['gambar'];
		$hargaxy = $dataxy['harga'];
		$hargafxy = number_format($hargaxy, 0, ',', '.');

		$sqlyx = $pdo->query("SELECT * FROM stokkursus WHERE tipe='$type'");
		$datayx = $sqlyx->fetch();
		$stokyx = $datayx['stok'];
	}
		
		date_default_timezone_set("Asia/Makassar");

		$today = new DateTime();
		$tglpesan = $today->format('Y-m-d H:i:s') .PHP_EOL;
		$today->add(new DateInterval('PT5H'));
		$jamex = $today->format('Y-m-d H:i:s') .PHP_EOL;

if(isset($_POST['klik'])) {
		$ambilx = $_GET['id'];

		$sqlx = $pdo->query("SELECT * FROM kursus WHERE idkursus='$ambilx'");
		$datax = $sqlx->fetch();
		$idkursus = $datax['idkursus'];
		$tipe = $datax['tipe'];
		$bidang = $datax['bidang'];
		$jumlah = $datax['jumlah'];
		$gambar = $datax['gambar'];
		$harga = $datax['harga'];
		$hargaf = number_format($harga, 0, ',', '.');

		$sqly = $pdo->query("SELECT * FROM stokkursus WHERE idkursus='$ambilx'");
		$datay = $sqly->fetch();
		$stok = $datay['stok'];
}
?>
		<div id="imglog">
			<h1>Daftar Kursus</h1>
		</div>
		<div id="pemesanan">

			<div id="pesankamar2">
<?php
	if(isset($_POST['ok'])) {
?>
			<form method="post" action="../fungsi/prosespesan" name="cekstok">
			<table width="380px">
			<tr align="center">
				<td colspan="2" style="width:300px;"><img src="../simpangambar/<?php echo $gambarxy?>" width='200px' height='150px' style="border:5px solid #B40301;"></td>
			</tr>
			<tr>
				<td>Tipe Pelatihan</td>
				<td>
				<input type="text" name="tipe" readonly="true" value="<?php echo $tipexy ?>">
					<input type="hidden" name="idkursus" readonly="true" value="<?php echo $idkamarxy ?>"></td>
			</tr>
			<tr>
				<td>Bidang Pelatihan</td>
				<td><input type="text" name="bidang" readonly="true" value="<?php echo $bidang ?>">
				<input type="hidden" name="stok" readonly="true" value=" <?php echo $stokyx?>"></td>
			</tr>
			<tr>
				<td>Harga / Latihan</td>
				<td><input type="text" name="harga" readonly="true" value="<?php echo $hargaxy ?>">
				<input type="hidden" name="stok" readonly="true" value=" <?php echo $stokyx ?>"></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td><input type="text" name="nama" value="<?php echo $nama ?>">
					<input type="hidden" name="idtamu" readonly="true" value="<?php echo $id ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $alamat?>"></td>
			</tr>
			<tr>
				<td>No. Telepon</td>
				<td><input type="text" name="telepon" value="<?php echo $telepon ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" style="width:100px;background:#B40301; color:white;font-weight:bold;padding:5px;border:2px solid #B40301;">Booking Pelatihan</button></td>
			</tr>
		</table>
		</form>
<?php 
	}
	
	if(isset($_POST['klik'])) {
?>

			
			<form method="post" action="../fungsi/prosespesan" name="cekstok">
			<table width="380px">
			<tr align="center">
				<td colspan="2" style="width:300px;"><img src="../simpangambar/<?php echo $gambar?>" width='200px' height='150px' style="border:5px solid #B40301;"></td>
			</tr>
			<tr>
				<td>Jenis Seni</td>
				<td>
				<input type="text" name="tipe" readonly="true" value="<?php echo $tipe ?>">
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
				<td><input type="text" name="nama" value="<?php echo $nama ?>">
					<input type="hidden" name="idtamu" readonly="true" value="<?php echo $id ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $alamat?>"></td>
			</tr>
			<tr>
				<td>No. Telepon</td>
				<td><input type="text" name="telepon" value="<?php echo $telepon ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" style="width:100px;background:#3279b8; color:white;font-weight:bold;padding:5px;border:2px solid #B40301; cursor: pointer; ">Daftar</button></td>
			</tr>
		</table>
		</form>
<?php  
	}
?>
		
		</center>
		</div>

<?php
	require_once "view/footer.php"
?> -->