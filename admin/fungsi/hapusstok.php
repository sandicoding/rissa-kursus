<?php
include"koneksi.php";
$ambil = $_GET['id'];
$sql = $pdo->query("DELETE FROM stokkursus WHERE idkursus='$ambil'");
echo"<script>document.location.href='../stokkursus';</script>";
?>