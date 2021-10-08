<?php
include"koneksi.php";
$id = $_POST['id'];
$tipe = $_POST['tipe'];
$bidang = $_POST['bidang'];

$harga = $_POST['harga'];

$gambar = $_FILES['gambar']['name'];
if(!preg_match("/^[0-9]*$/", $harga)){
			echo"<script>alert('pastikan harga di input dengan number');document,location.href='../inputkamar';</script>";
		}else {
            $sqlsimpan = $pdo->query("INSERT INTO tb_kursus VALUES(null,'$tipe', '$bidang', '$harga', '$gambar')");
            move_uploaded_file($_FILES['gambar']['tmp_name'],"../../simpangambar/".$_FILES['gambar']['name']);
            echo"<script>alert('Data Kursus Tersimpan');document,location.href='../datakamar';</script>";
        }





?>