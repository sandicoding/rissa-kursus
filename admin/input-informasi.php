<?php
error_reporting(0);
	require_once "view/header.php";
?>

	<aside>
		<center>
		<div id="forminput">
		<h3>Input Data Informasi</h3>

        <?php 
        
			$sql = $pdo->query("SELECT * FROM tb_informasi");
			$data = $sql->fetch();
            $id = $data['id'];
			$nama = $data['nama'];
			$gambar = $data['gambar'];
            $input = "proses-input-informasi";
            $update = "edit-informasi";

        ?>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="../simpangambar/<?= $gambar ?>" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?= $nama ?></h5>
            </div>
        </div>
        
		<form method="post" action="fungsi/<?php if(empty($id)){  echo $input; }else {echo $update;} ?>" enctype="multipart/form-data">
            <div class="form-group w-25">
                <div class="text-left">
                    <label for="exampleInputEmail1">Nama</label>
                </div>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                <input type="hidden" name="id" value="<?= $id ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
            </div>
            <div class="form-group  w-25">
                <div class="text-left">
                <label for="foto">Foto</label>
                </div>
                <input type="file" name="gambar" class="form-control-file" id="foto">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
		</form>
		</div>
		</center>
	</aside>

<?php
	require_once "view/footer.php"
?>