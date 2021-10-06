<?php
include"koneksi.php";
$id = $_POST['id'];
$tipe = $_POST['edittipe'];
$bidang = $_POST['editbidang'];
$stok = $_POST['editstok'];


$update = $pdo->query("UPDATE stokkursus SET idkursus='$id', tipe='$tipe', bidang='bidang', stok='$stok' WHERE idkursus='$id'");
echo "<script>alert ('Stok Kursus telah diupdate');document.location.href='../stokkursus';</script>";

?>
