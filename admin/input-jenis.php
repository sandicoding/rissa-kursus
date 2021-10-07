<?php
	require_once "view/header.php";
?>

	<aside>
		<center>
		<div id="forminput">
		<h3>Input Data Jenis Seni</h3>
        
		<form method="post" action="fungsi/proses-input-jenis" enctype="multipart/form-data">
            <div class="form-group w-25">
                <div class="text-left">
                    <label for="exampleInputEmail1">Nama</label>
                </div>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
		</form>
		</div>
		</center>
	</aside>

<?php
	require_once "view/footer.php"
?>