<?php
	require_once "view/header.php";
?>

	<aside>
		<center>
			<h3>Data Pendaftaran</h3>
			<div id="kanan">
				<table width="100%" border="1px solid black">
				<tr style="background: #11022a; color: white; font-size: 14px;">
					<th>Kd</th>
					<th>Nama</th>
					<th>Telepon</th>
					<th>Jenis Seni</th>
					<th>Nama Kursus</th>
					<th>Harga</th>
					<th>Action</th>
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

					if ($status == 'Pending...') {
  				?>
				<tr align="center" style="font-weight: normal; font-size: 12px;">
					<td class="tkonfirm"><?php echo $idpesan ?></td>
					<td class="tkonfirm"><?php echo $namax ?></td>
					<td class="tkonfirm"><?php echo $telepon ?></td>
					<td class="tkonfirm"><?php echo $tipe ?></td>
					<td class="tkonfirm"><?php echo $bidang ?></td>
					<td class="tkonfirm"><?php echo $hargaa ?></td>
					
					<td><a href="fungsi/proseskonfirmasi?id=<?php echo $idpesan ?>"><button style="width:70px;background:#B40301;color:white;font-weight:normal;padding:2px;border:1px solid red; margin-bottom: 3px;">Konfirmasi</button></a></td>
				</tr>
				<?php
					}
			  	}
			  ?>
			  </table>
			</div>
		</center>
	</aside>

<?php
	require_once "view/footer.php"
?>