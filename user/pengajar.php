<?php
	require_once "view/header.php";
?>

<!-- ----konek--- -->
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/ css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- -------- -->

<!-------- Facilities -------->

<section class="facilities2">
	<h1>Pengajar Kami</h1>
	<p>Pengajar-pengajar yang professional di Rumah Musik Harry Roesli</p>

	<div class="row3">

		<?php 
			$sql = $pdo->query("SELECT * FROM tb_pengajar");
                        while ($caridata = $sql->fetch()) {
                        $nama = $caridata['nama'];
                        $gambar = $caridata['gambar'];
                        $bidang = $caridata['bidang'];
                        $deskripsi = $caridata['deskripsi'];
		?>
		<div class="facilities-col2">
			<img src="../simpangambar/<?= $gambar ?>">
			<h3 style="text-decoration: none;"><?= $nama ?></h3>
			<p><b><?= $bidang ?></b><br></p>
			<p align="justify"><?= $deskripsi ?></p>
		</div>

		<?php }?>

		
	</div>
	<h4 style="text-decoration: none; color: red;">Diatas merupakan beberapa pengajar di RMHR, <br>dan masih banyak lagi pengajar-pengajar yang lain. <br>Nanti akan disesuaikan sesuai kemampuan dan keinginan kamu.</h4>

</section>

<?php
	require_once "view/footer.php"
?>