<?php
include"koneksi.php";
$id = $_POST['id'];
$tipe = $_POST['edittipe'];
$bidang = $_POST['editbidang'];
$harga = $_POST['editharga'];
$gambar = $_FILES['editgambar']['name'];

move_uploaded_file($_FILES['editgambar']['tmp_name'],"../../simpangambar/".$gambar);

	if(empty($gambar)) {
		$update = $pdo->query("UPDATE kursus SET idkursus='$id', tipe='$tipe', bidang='$bidang', harga='$harga' WHERE idkursus='$id'");
		

		echo "<script>alert ('Data telah diupdate');document.location.href='../datakamar';</script>";
	}
	elseif (!empty($gambar)) {
		$update = $pdo->query("UPDATE kursus SET idkursus='$id', tipe='$tipe', bidang='$bidang',  harga='$harga', gambar='$gambar' WHERE idkursus='$id'");
		
		
		echo "<script>alert ('Data telah diupdate');document.location.href='../datakamar';</script>";
}

?>
