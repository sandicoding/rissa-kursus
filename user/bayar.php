<?php
		require_once "view/header.php";
		
		$ambilx = $_GET['id'];

		$sqlx = $pdo->query("SELECT * FROM pemesanan WHERE idpesan='$ambilx'");
		$datax = $sqlx->fetch();
		$idpesan = $datax['idpesan'];
		$nama = $datax['nama'];
		$harga = $datax['harga'];

		

?>


<!-------- Konfirmasi Pembayaran -------->

<section class="konfirmasi-bayar">
	<h1 style="background: white;padding-top: 20px;">Konfirmasi Pembayaran</h1>
	
			<center>
			
			<div class="datapesan" style="background: white;padding: 30px 0 130px;">
			
			<div style="width: 50%;background: #4a57c3;padding: 10px;">

			<form method="post" action="../fungsi/prosesbayar" enctype="multipart/form-data">
			<table style="width: 90%;padding: 10px;margin: 10px;">
				<caption style="color: white;">Konfirmasi Pembayaran</caption>
			<tr>
				<td>Kd Transaksi</td>
				<td><input type="text" readonly="readonly" required="required" name="txtid" value="<?php echo $idpesan ?>"></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td><input type="text" readonly="readonly" required="required" name="txtnama" value="<?php echo $nama ?>"></td>
			</tr>
			<tr>
				<td>Jumlah Bayar</td>
				<td><input type="text" readonly="readonly" required="required" name="txtharga" value="<?php echo $harga ?>"></td>
			</tr>
			<tr>
				<td>Bank</td>
				<td>
					<select name="txtbank" required="required" style="font-weight: bold">
						<option hidden="hidden">-Pilih Bank-</option>
						<option>Mandiri</option>
						<option>BCA</option>
						<option>BNI</option>
						<option>BRI</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>No. rekening</td>
				<td><input type="text" required="required" name="txtnorek"></td>
			</tr>
			<tr>
				<td>Nama Pemilik Rekening</td>
				<td><input type="text" required="required" name="txtnamarek"></td>
			</tr>
			<tr>
				<td>Upload Bukti Transfer</td>
				<td><input type="file" required="required" name="txtgambar"></td>
			</tr>
		</table>
		<input type="submit" name="submit" value="Kirim" id="tombol" style="color: white; cursor: pointer;">
		</form>
		</div>
		</center>
		</div>
	</aside>
	
</section>

<?php
	require_once "view/footer.php"
?>