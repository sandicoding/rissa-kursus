<?php
	require_once "view/header.php";
?>

	<aside>
		<center>
			<h3>Data Kursus</h3>
		<div id="datakamar">
		<?php
			include"fungsi/koneksi.php";
			$sql = $pdo->query("SELECT * FROM tb_kursus");
			$sql2 = $pdo->query("SELECT tb_kursus.idkursus, tb_kursus.bidang, tb_kursus.gambar, tb_kursus.harga, tb_jenis_seni.nama as nama from tb_kursus INNER JOIN tb_jenis_seni ON tb_kursus.id_tipe = tb_jenis_seni.id");
			// $data22 = $sql2->fetch();
			// var_dump($data22);

			while($data2 = $sql2->fetch()){
				// var_dump($data2);
				$id = $data2['idkursus'];
				$tipe = $data2['nama'];
				$bidang = $data2['bidang'];
				
				$harga = $data2['harga'];
				$gambar = $data2['gambar'];

				$bts = 25;
				$tpak = strlen($tipe);
				if($tpak > $bts) {
					$tp = substr($tipe, 0, $bts) . '...';
				}
				else {
					$tp = $tipe;
				}

				$angka = number_format($harga,0,",",".");
		?>
			<div class="kamar">
				<table>
					<tr>
						<td>
							<center>
								<a href="detailkamar?id=<?php echo $id ?>" style="text-decoration:none;">
								<div class="idkamar">
									<?php echo $id ?><br>
									<?php echo $tp ?>
								</div>
								<div class="bidang"><b> <?php echo $bidang ?></div></b>
								<div class="tipekamar"><b>Rp. <?php echo $angka ?></div></b>
								<img src="../simpangambar/<?php echo $gambar ?>" width="200px" height="150px"/>
								
								</a>
							</center>
						</td>
					</tr>
					<tr>
						<td>
							<center>
								<a href="editkamar?id=<?php echo $id ?>"><button style="width:70px;background-color:#000;color:white;font-weight:bold;padding:4px;border:1px solid red;">Ubah</button></a> 

								<a href="fungsi/hapuskamar?id=<?php echo $id ?>" onclick="return confirm('Anda akan menghapus?')"><button style="width:70px;background:#11022a;color:white;font-weight:bold;padding:4px;border:1px solid red;">Hapus</button></a> 
							</center>
						</td>
					</tr>
				</table>
			</div>
			<?php
				}
			?>
		</div>
		</center>
	</aside>

<?php
	require_once "view/footer.php"
?>