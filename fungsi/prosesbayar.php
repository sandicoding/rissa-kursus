<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="../lib/sweet.js"></script>
</head>
<body>

<?php
include"koneksi.php";
$idpesan = $_POST['txtid'];
$nama = $_POST['txtnama'];
$harga = $_POST['txtharga'];
$bank = $_POST['txtbank'];
$norek = $_POST['txtnorek'];
$namarek = $_POST['txtnamarek'];
$gambar = $_FILES['txtgambar']['name'];

$size = $_FILES['txtgambar']['size'];


$max_size = 1000 * 2000;



if($size > $max_size) {
	?> 
	<script type="text/javascript">
		alert("Oops, Ukuran file melebihi 2MB");
		document.location.replace('../user/datapesanan');
	</script>
	<?php
}else{


$sqlsimpan = $pdo->query("INSERT INTO pembayaran VALUES('$idpesan', '$nama', '$harga', '$bank', '$norek', '$namarek', '$gambar')");

move_uploaded_file($_FILES['txtgambar']['tmp_name'],"../simpangambar/".$_FILES['txtgambar']['name']);

echo"<script>swal({
	  	type: 'success',
	  	title: 'Konfirmasi Pembayaran Terkirim!',
	  	showConfirmButton: false,
	  	backdrop: 'rgba(0,0,123,0.5)',
		});
		window.setTimeout(function(){
			window.location.replace('../user/datapesanan');
 		} ,1500);</script>";
 	}
?>

</body>
</html>