<?php
	session_start();
	require_once "fungsi/koneksi.php";
	if(!isset($_SESSION['ceklog'])) {
?>
		<html>
		<head>
		<title></title>
		<script type="text/javascript" src="../lib/sweet.js"></script>
		</head>
		<body>
			<script>
				swal({
			  		title: 'Oops...?',
			  		text: 'Silahkan Login Terlebih Dahulu!',
			  		showConfirmButton: false,
			  		type: 'warning',
			  		backdrop: 'rgba(123,0,0,5)',
				});
				window.setTimeout(function(){
					window.location.replace('index.php');
		 		} ,2000); 
		 	</script>;
		</body>
		</html>
<?php
	}	
?>

<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="css/stylesss.css" type="text/css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<header>
		<h1 class="judul">Rumah Musik Harry Roesli</h1>
		<h3 class="desc">Admin</h3>
	</header>

	<nav>
		<ul>
			
		</ul>
	</nav>

	<main>
		<ul>
			<li><a href="beranda" class="kiri">Beranda Admin</a></li>
			<li><a href="inputkamar" class="kiri">Input Data Kursus</a></li>
			<li><a href="input-jenis" class="kiri">Input Data Jenis Seni</a></li>
			<li><a href="input-pengajar" class="kiri">Input Data Pengajar</a></li>
			<li><a href="input-informasi" class="kiri">Input Data Informasi</a></li>
			<li><a href="datakamar" class="kiri">Data Kursus</a></li>
			<li><a href="data-jenis" class="kiri">Data Jenis Seni</a></li>
			<li><a href="data-pengajar" class="kiri">Data Pengajar</a></li>
			<li><a href="datauser" class="kiri">Data Siswa</a></li>
			<li><a href="databayar" class="kiri">Data Pembayaran</a></li>
			<li><a href="konfirmasi" class="kiri">Data Pendaftaran</a></li>
			<li><a href="transaksiberhasil" class="kiri">Data Laporan Pendaftaran</a></li>
			<li><a href="kontak" class="kiri">Kontak</a></li>
			<li><a href="fungsi/proseskeluar" class="kiri">Logout</a></li>
		</ul>
		
	</main>