<?php
include"koneksi.php";
$ambil = $_GET['id'];
$sql = $pdo->query("DELETE FROM tb_kursus WHERE idkursus='$ambil'");

echo"<script>document.location.href='../datakamar';</script>";
?>