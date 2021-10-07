<?php
	require_once "view/header.php";
?>

	<aside>
		<center>
		<div id="forminput">
		<h3>Input Data Pengajar</h3>
        
		<form method="post" action="fungsi/proses-input-pengajar" enctype="multipart/form-data">
            <div class="form-group w-25">
                <div class="text-left">
                    <label for="exampleInputEmail1">Nama</label>
                </div>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
            </div>
             <div class="form-group w-25">
                <div class="text-left">
                    <label for="bidang">Bidang</label>
                </div>
                <input type="text" name="bidang" class="form-control" id="bidang" aria-describedby="emailHelp" placeholder="Enter Bidang">
            </div>
            <div class="form-group  w-25">
                <div class="text-left">
                <label for="deskripsi">Deskripsi</label>
                </div>
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"></textarea>
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