<?php
include"koneksi.php";
$id = $_POST['id'];
$tipe = $_POST['edittipe'];
$bidang = $_POST['editbidang'];
$harga = $_POST['editharga'];
$gambar = $_FILES['editgambar']['name'];

move_uploaded_file($_FILES['editgambar']['tmp_name'],"../../simpangambar/".$gambar);

if(!preg_match("/^[0-9]*$/", $harga)){
			echo"<script>alert('pastikan harga di input dengan number');document,location.href='../datakamar';</script>";
		}else {
           

			if(empty($gambar)) {

		
					$update = $pdo->query("UPDATE tb_kursus SET idkursus='$id', id_tipe='$tipe', bidang='$bidang', harga='$harga' WHERE idkursus='$id'");
					
					echo "<script>alert ('Data telah diupdate');document.location.href='../datakamar';</script>";
				}
				elseif (!empty($gambar)) {
				$update = $pdo->query("UPDATE tb_kursus SET idkursus='$id', id_tipe='$tipe', bidang='$bidang', harga='$harga' WHERE idkursus='$id'");
					
					
					echo "<script>alert ('Data telah diupdate');document.location.href='../datakamar';</script>";
			}
        }
	

?>
