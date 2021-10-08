<?php
include"koneksi.php";
$nama = $_POST['nama'];
$gambar = $_FILES['gambar']['name'];

$sqlsimpan = $pdo->query("INSERT INTO tb_informasi VALUES(null,'$nama','$gambar')");


move_uploaded_file($_FILES['gambar']['tmp_name'],"../../simpangambar/".$_FILES['gambar']['name']);
echo"<script>alert('Data Pengajar Tersimpan');document,location.href='../input-informasi';</script>";
?>