<?php
	require_once "view/header.php";

	$ambil = $_GET['id'];
  	$sql = $pdo->query("SELECT * FROM kursus WHERE idkursus='$ambil'");
  	$caridata = $sql->fetch();
  	$idkursus = $caridata['idkursus'];
  	$tipe = $caridata['tipe'];
  	$bidang = $caridata['bidang'];
  	$harga = $caridata['harga'];
  	$gambar = $caridata['gambar'];

  	$angka = number_format($harga,0,",",".");
?>

	<aside>
		<center>
			<h3>Detail Pelatihan</h3>
			<div id="kanan">
				<table align="center">
				<tr>
					<td colspan="3"><img src="../simpangambar/<?php echo $gambar?>" width="350px" height="250px"/></td>
				</tr>
				<tr>
					<td>ID Pelatihan</td>
					<td><center>:</center></td>
					<td><?php echo $idkursus ?></td>
				</tr>
				<tr>
					<td>Level Pelatihan</td>
					<td><center>:</center></td>
					<td><?php echo $tipe ?></td>
				</tr>
				<tr>
					<td>Bidang Pelatihan</td>
					<td><center>:</center></td>
					<td><?php echo $bidang ?></td>
				</tr>
				
				<tr>
					<td>Harga</td>
					<td><center>:</center></td>
					<td>Rp. <?php echo $angka ?></td>
				</tr>
				<tr>
					<td></td>
					<td><center><a href="datakamar"><button style="width:85px;background:#B40301;color:white;font-weight:bold;padding:4px;border:2px solid red;">&lt;&lt;Kembali</button></a></center></td>
					<td></td>
				</tr>
			  </table>
			</div>
		</center>
	</aside>

<?php
	require_once "view/footer.php"
?>