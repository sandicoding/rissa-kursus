<?php
	require_once "view/header.php";
     include "fungsi/koneksi.php";

    
			$id_jenis = $_GET['id'];
			$sql = $pdo->query("SELECT * FROM tb_jenis_seni WHERE id='$id_jenis'");
			$data = $sql->fetch();
			$id = $data['id'];
			$nama = $data['nama'];
?>

	<aside>
		<center>
		<div id="forminput">
		<h3>update Data Jenis Seni</h3>
        
		<form method="post" action="fungsi/edit-jenis" enctype="multipart/form-data">
            <div class="form-group w-25">
                <div class="text-left">
                    <label for="exampleInputEmail1">Nama</label>
                </div>
                <input type="text" name="nama" value="<?= $nama ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                <input type="hidden" name="id" value="<?= $id ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
		</form>
		</div>
		</center>
	</aside>

<?php
	require_once "view/footer.php"
?>