<?php
	require_once "view/header.php";
?>

	<div >
		<center>
			<h3>Data Laporan Pendaftaran</h3>
			<form action="" method="POST">
<table>
<tr>
<td>
  <select name="bln" class="form-control">
                  <option>--Pilih--</option>
                  <option value="01">Januari</option>
                  <option value="02">Februari</option>
                  <option value="03">Maret</option>
                  <option value="04">April</option>
                  <option value="05">Mei</option>
                  <option value="06">Juni</option>
                  <option value="07">Juli</option>
                  <option value="08">Agustus</option>
                  <option value="09">September</option>
                  <option value="10">Oktober</option>
                  <option value="11">November</option>
                  <option value="12">Desember</option>
                </select>
</select>
</td>
<td>
<select name="thn" class="form-control">
<?php
$mulai= date('Y') - 50;
for($i = $mulai;$i<$mulai + 100;$i++){
    $sel = $i == date('Y') ? ' selected="selected"' : '';
    echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
}
?>
</select>
</td>

<td>&nbsp;&nbsp;<button type="submit" class="btn btn-primary" name="cari">Cari</button></td>
</tr>
</table>
</form>

<?php

  if(isset($_POST['cari'])){

    $bln = $_POST['bln'];
    $thn = $_POST['thn'];

  
?>

<script>

  window.location = 'transaksiberhasil.php?bln=<?php echo $bln; ?>&&thn=<?php echo $thn; ?>';

  </script>

  <?php } ?>

<?php
if(isset($_GET['bln'])&& isset($_GET['thn'])){

$bln = $_GET['bln'];
$thn = $_GET['thn'];
 ?>
			<div id="kanan">
				<form method="post" action="proseskonfirmasi">
				<table border="1px">
				<tr style="background: #11022a; color: white; font-size: 14px;">
					<th>Kd</th>
					<th>Nama</th>
					<th>Telepon</th>
					<th>Jenis Seni</th>
					<th>Nama Kursus</th>
					<th>Harga</th>
				</tr>
				<?php
					$sql = $pdo->query("SELECT * FROM pemesanan WHERE month(created_at) = '$bln' AND year(created_at) = '$thn' ORDER BY idpesan ASC");
			  		while ($datax = $sql->fetch()) {
			  		$idpesan = $datax['idpesan'];
					$tipe = $datax['tipe'];
					$bidang = $datax['bidang'];
					$harga = $datax['harga'];
					$namax = $datax['nama'];
					$alamat = $datax['alamat'];
					$telepon = $datax['telepon'];
					$status = $datax['status'];

					
					$hargaa = number_format($harga,0,",",".");
					
					if ($status == 'Berhasil') {
  				?>
				<tr align="center" style="font-weight: normal; font-size: 12px;">
					<td class="tkonfirm"><?php echo $idpesan ?></td>
					<td class="tkonfirm"><?php echo $namax ?></td>
					<td class="tkonfirm"><?php echo $telepon ?></td>
					<td class="tkonfirm"><?php echo $tipe ?></td>
					<td class="tkonfirm"><?php echo $bidang ?></td>
					<td class="tkonfirm"><?php echo $hargaa ?></td>
					
				</tr>
				<?php
					}
			  	}
			  ?>
			  </table>
			  </form>
			</div>

			<a href="laporan-transaksi.php?bln=<?php echo $bln; ?>&&thn=<?php echo $thn; ?>" target="_blank"><button id="laporan" style="width:150px;background:black;color:white;font-weight:bold;padding:4px;border:2px solid white; margin-top: 5px;">Cetak Laporan</button></a>
		</center>
	</div>
<?php }?>

<?php
	require_once "view/footer.php"
?>





<!-- <?php
	// require_once "view/header.php";
?>

	<aside>
		<center>
			<h3>Transaksi Berhasil</h3>
			<div id="kanan">
				<form method="post" action="proseskonfirmasi">
				<table border="1px">
				<tr style="background: #11022a; color: white; font-size: 14px;">
					<th>ID</th>
					<th>Jenis Seni</th>
					<th>Nama Kursus</th>
					<th>Harga</th>
					<th>Nama</th>
					<th>Telepon</th>
				</tr>
				<?php
					$sql = $pdo->query("SELECT * FROM pemesanan ORDER BY idpesan DESC");
			  		while ($datax = $sql->fetch()) {
			  		$idpesan = $datax['idpesan'];
					$tipe = $datax['tipe'];
					$bidang = $datax['bidang'];
					$harga = $datax['harga'];
					$namax = $datax['nama'];
					$alamat = $datax['alamat'];
					$telepon = $datax['telepon'];
					$status = $datax['status'];

					
					$hargaa = number_format($harga,0,",",".");
					
					if ($status == 'Berhasil') {
  				?>
				<tr align="center" style="font-weight: normal; font-size: 12px;">
					<td class="tkonfirm"><?php echo $idpesan ?></td>
					<td class="tkonfirm"><?php echo $tipe ?></td>
					<td class="tkonfirm"><?php echo $bidang ?></td>
					<td class="tkonfirm"><?php echo $hargaa ?></td>
					<td class="tkonfirm"><?php echo $namax ?></td>
					<td class="tkonfirm"><?php echo $telepon ?></td>
				</tr>
				<?php
					}
			  	}
			  ?>
			  </table>
			  </form>
			</div>

			<a href="laporan-transaksi" target="_blank"><button id="laporan" style="width:150px;background:black;color:white;font-weight:bold;padding:4px;border:2px solid white; margin-top: 5px;">Cetak Laporan</button></a>
		</center>
	</aside>

<?php
	// require_once "view/footer.php"
?> -->