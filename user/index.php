<?php
	require_once "view/header.php";
	if(isset($_SESSION['tipe'])) {
		$amb = $_SESSION['tipe'];
		$sqlx = $pdo->query("SELECT * FROM kursus WHERE tipe=$amb");
		$datax = $sqlx->fetch();
		$idkursus = $datax['idkursus'];
		$tipe = $datax['tipe'];
		$jumlah = $datax['jumlah'];
		$gambar = $datax['gambar'];
		$harga = $datax['harga'];
		$hargaf = number_format($harga, 0, ',', '.');
	}
?>

<script type="text/javascript">
	function pilih() {
		var type = document.opsi.tipe.value;
		var teks = document.getElementById('selek').options[document.getElementById('selek').selectedIndex].text;
		document.opsi.harga.value = type;
		document.opsi.tipex.value = teks;

	}
</script>
<!-- ----konek--- -->
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/ css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- -------- -->
	<div id="imgindex">
		<div id="imglog">
			<h1>Rumah Musik Harry Roesli</h1><br>
				<p><i>Good times, Good music and Good friends.<br>
		Rumah berkumpulnya para pecinta seni.<br>
		Since. 1998</i><br>&nbsp;</p>
		</div>
	</div>

<!------ Course ------>

<section class="course">
	<h1>Kursus</h1>
	<p>Tingkatkan kreativitasmu, dengan kursus di RMHR.</p>

	<div class="row">
		<div class="course-col">
			<h3>Musik</h3>
			<p>Musik dapat Melatih konsentrasi dan ketekunan, Menumbuhkan kreativitas, dan Meningkatkan koordinasi tubuh. Di RMHR terdapat tingkatan kelas mulai dari Beginner, Intermediate, dan Advanced. Kamu dapat sharing cerita ke teman-teman di komunitas.</p>
			<a href="kursus.php" class="hero-btn red-btn">Daftar Kursus >></a>
		</div>
		<div class="course-col">
			<h3>Tari</h3>
			<p>Kami mempunyai kursus Line Dance, Line dance mampu Meningkatkan refleks, keseimbangan dan kekuatan tubuh bagian bawah, Dapat menjaga kepadatan tulang atau mampu mencegah osteoporosis, Meningkatkan keseimbangan tubuh, dan Mengencangkan otot pinggul.</p>
			<a href="kursus.php" class="hero-btn red-btn">Daftar Kursus >></a>
		</div>
	</div>
</section>

<!-- ------ Campus/Place -------->
<section class="campus">
	<h1>Tempat Kami</h1>
	<p>Kami menyediakan berbagai spot untuk para siswa dapat berkumpul.</p>

	<div class="row">
		<div class="campus-col">
			<img src="../gambar/london.png">
				<h3 style="text-decoration: none;">LOBI</h3>
		</div>
		<div class="campus-col">
			<img src="../gambar/newyork.png">
				<h3 style="text-decoration: none;">HALAMAN TENGAH</h3>
		</div>
		<div class="campus-col">
			<img src="../gambar/washington.png">
				<h3 style="text-decoration: none;">RUANG BERKUMPUL</h3>
		</div>
	</div>
</section>

<!-------- Facilities -------->

<section class="facilities">
	<h1>Ruang Kami</h1>
	<p>Di RMHR mempunyai beberapa ruang yang dapat dinikmati.</p>

	<div class="row">
		<div class="facilities-col">
			<img src="../gambar/cafe1.jpg">
			<h3 style="text-decoration: none;">Cafe</h3>
			<p>Selesai kursus, dapat langsung ke cafe untuk bersantai .</p>
		</div>
		<div class="facilities-col">
			<img src="../gambar/ruangkonten.jpg">
			<h3 style="text-decoration: none;">Ruang Konten</h3>
			<p>Terdapat ruang untuk siswa berkreasi membuat konten di social media.</p>
		</div>
		<div class="facilities-col">
			<img src="../gambar/studio.jpg">
			<h3 style="text-decoration: none;">Studio</h3>
			<p>Studio untuk siswa melakukan kursus musik.</p>
		</div>
	</div>
</section>

<!-- ------ testimonials ------ -->

<section class="testimonials"> 
	<h1>Apa kata murid kami?</h1>
	<p>Murid menceritakan pengalamannya selama kursus di RMHR.</p>

	<div class="row">
		<div class="testimonial-col">
			<img src="../gambar/profil.png">
			<div>
				<p>Senang belajar di Rumah Musik Harry Roesli, karena gurunya baik, mengajarnya berbeda dari tempat kursus lainnya, di RMHR bisa lebih mengayomi.</p>
				<h3 style="text-decoration: none;">Intan</h3>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o"></i>
			</div>
		</div>
		<div class="testimonial-col">
			<img src="../gambar/profil.png">
			<div>
				<p>Disini aku kursus sekaligus bisa kumpul bareng berbagai komunitas, guru-gurunya baik bangettt. Tempat kursus yang recommended deh!.</p>
				<h3 style="text-decoration: none;">Ari</h3>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-half-o"></i>
			</div>
		</div>
	</div>
</section>
	

<?php
	require_once "view/footer.php"
?>
