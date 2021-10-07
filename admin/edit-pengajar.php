<?php
	require_once "view/header.php";
    include "fungsi/koneksi.php";

    
			$id_pengajar = $_GET['id'];
			$sql = $pdo->query("SELECT * FROM tb_pengajar WHERE id_pengajar='$id_pengajar'");
			$data = $sql->fetch();
			$id = $data['id_pengajar'];
			$nama = $data['nama'];
			$bidang = $data['bidang'];		
			$deskripsi = $data['deskripsi'];
			$gambar = $data['gambar'];
?>

	<aside>
		<center>
		<div id="forminput">
		<h3>Update Data Pengajar</h3>
        
		<form method="post" action="fungsi/edit-pengajar" enctype="multipart/form-data">
            <div class="form-group w-25">
                <div class="text-left">
                    <label for="exampleInputEmail1">Nama</label>
                </div>
                <input type="text" name="nama" value="<?= $nama ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                <input type="hidden" value="<?= $id ?>" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
            </div>
             <div class="form-group w-25">
                <div class="text-left">
                    <label for="bidang">Bidang</label>
                </div>
                <input type="text" name="bidang" value="<?= $bidang ?>" class="form-control" id="bidang" aria-describedby="emailHelp" placeholder="Enter Bidang">
            </div>
            <div class="form-group  w-25">
                <div class="text-left">
                <label for="deskripsi">Deskripsi</label>
                </div>
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"><?php echo htmlspecialchars($deskripsi); ?></textarea>
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