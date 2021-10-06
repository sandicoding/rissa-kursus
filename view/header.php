<?php
    session_start();
	require_once "fungsi/koneksi.php";
    if(isset($_SESSION['user'])) {
        echo "<script>window.location.replace('user/')</script>";
    }
    else {
        unset($_SESSION['user']);
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Kursus Rumah Musik Harry Roesli</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="lib/sweet.js"></script>
	<style type="text/css">
		
		
	</style>
</head>
<body>

	<nav>
		<div class="nav-links" id="navLinks">
			<img src="gambar/music1.jpg" width="250px" >
			<ul>
				<li><a href="index">Beranda</a></li>
				<li><a href="kursus">Kursus</a></li>
				<li><a href="fasilitas">Fasilitas</a></li>	
				<li><a href="pengajar">Pengajar</a></li>	
				<li><a href="kontak">Kontak</a></li>
				<li><a href="blog">Informasi & Kegiatan</a></li>
			</ul>
			</div>

	</nav><center>

	<main>
		<center>