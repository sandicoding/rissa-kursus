<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="../lib/sweet.js"></script>
</head>
<body>

<?php
date_default_timezone_set('Asia/Jakarta');
include"koneksi.php";
$idkursus = $_POST['idkursus'];
$tipe = $_POST['tipe'];
$bidang = $_POST['bidang'];
$harga = $_POST['harga'];
$idtamu = $_POST['idtamu'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$created_date = date('Y-m-d H:i:s');
$sqlsimpan = $pdo->query("INSERT INTO pemesanan VALUES(null, '$idkursus', '$tipe', '$bidang', '$harga', '$idtamu', '$nama', '$alamat', '$telepon', 'Pending...','$created_date')");



echo"<script>swal({
	  	type: 'success',
	  	title: 'Pendaftaran Kursus Berhasil',
	  	showConfirmButton: false,
	  	backdrop: 'rgba(0,0,123,0.5)',
		});
		window.setTimeout(function(){
			window.location.replace('../user/datapesanan');
 		} ,1500);</script>";
?>

</body>
</html>