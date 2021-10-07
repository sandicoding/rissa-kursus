<?php
include"koneksi.php";
$ambil = $_GET['id'];
$sql = $pdo->query("DELETE FROM tb_jenis_seni WHERE id='$ambil'");

echo"<script>document.location.href='../data-jenis';</script>";
?>