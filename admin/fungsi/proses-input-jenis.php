<?php
include"koneksi.php";
$nama = $_POST['nama'];


$sqlsimpan = $pdo->query("INSERT INTO tb_jenis_seni VALUES(null,'$nama')");


move_uploaded_file($_FILES['gambar']['tmp_name'],"../../simpangambar/".$_FILES['gambar']['name']);
echo"<script>alert('Data Jenis Seni Tersimpan');document,location.href='../data-jenis';</script>";
?>