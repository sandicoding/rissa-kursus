<?php
include"koneksi.php";
$id = $_POST['id'];
$nama = $_POST['nama'];



	$update = $pdo->query("UPDATE tb_jenis_seni SET id='$id', nama='$nama' WHERE id='$id'");
		
		
	echo "<script>alert ('Data telah diupdate');document.location.href='../data-jenis';</script>";


?>
