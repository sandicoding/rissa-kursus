<?php
include"koneksi.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$gambar = $_FILES['gambar']['name'];

move_uploaded_file($_FILES['gambar']['tmp_name'],"../../simpangambar/".$gambar);

	if(empty($gambar)) {
		$update = $pdo->query("UPDATE tb_informasi SET id='$id', nama='$nama', gambar='$gambar' WHERE id='$id'");
		

		echo "<script>alert ('Data telah diupdate');document.location.href='../input-informasi';</script>";
	}
	elseif (!empty($gambar)) {
		$update = $pdo->query("UPDATE tb_informasi SET id='$id', nama='$nama', gambar='$gambar' WHERE id='$id'");
		
		
		echo "<script>alert ('Data telah diupdate');document.location.href='../input-informasi';</script>";
}

?>
