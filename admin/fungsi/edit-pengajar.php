<?php
include"koneksi.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$bidang = $_POST['bidang'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_FILES['gambar']['name'];

move_uploaded_file($_FILES['gambar']['tmp_name'],"../../simpangambar/".$gambar);

	if(empty($gambar)) {
		$update = $pdo->query("UPDATE tb_pengajar SET id_pengajar='$id', gambar='$gambar', nama='$nama', bidang='$bidang', deskripsi='$deskripsi' WHERE id_pengajar='$id'");
		

		echo "<script>alert ('Data telah diupdate');document.location.href='../data-pengajar';</script>";
	}
	elseif (!empty($gambar)) {
		$update = $pdo->query("UPDATE tb_pengajar SET id_pengajar='$id', gambar='$gambar', nama='$nama', bidang='$bidang', deskripsi='$deskripsi' WHERE id_pengajar='$id'");
		
		
		echo "<script>alert ('Data telah diupdate');document.location.href='../data-pengajar';</script>";
}

?>
