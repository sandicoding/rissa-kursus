<?php
include"koneksi.php";
$ambil = $_GET['id'];
$sql = $pdo->query("DELETE FROM tb_pengajar WHERE id_pengajar='$ambil'");

echo"<script>document.location.href='../data-pengajar';</script>";
?>