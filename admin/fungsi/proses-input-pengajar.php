<?php
include"koneksi.php";
$nama = $_POST['nama'];
$bidang = $_POST['bidang'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_FILES['gambar']['name'];

$sqlsimpan = $pdo->query("INSERT INTO tb_pengajar VALUES(null,'$gambar','$nama','$bidang','$deskripsi')");


move_uploaded_file($_FILES['gambar']['tmp_name'],"../../simpangambar/".$_FILES['gambar']['name']);
echo"<script>alert('Data Pengajar Tersimpan');document,location.href='../data-pengajar';</script>";
?>