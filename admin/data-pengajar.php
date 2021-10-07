<?php
	require_once "view/header.php";
?>

	<aside>
		<center>
            <div class="container text-left">
                <h3>Data Pengajar</h3>
                 <div class="table-responsive">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Bidang</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     $no = 1;
                        $sql = $pdo->query("SELECT * FROM tb_pengajar");
                        while ($caridata = $sql->fetch()) {
                        $id = $caridata['id_pengajar'];
                        $nama = $caridata['nama'];
                        $gambar = $caridata['gambar'];
                        $bidang = $caridata['bidang'];
                        $deskripsi = $caridata['deskripsi'];
                       
                        
                    ?>
                    <tr>
                    <td><?= $no++ ?></td>
                    <td><img class="rounded-circle" src="../simpangambar/<?php echo $gambar ?>" width="60"></td>
                    <td><?php echo $nama ?></td>
                    <td><?php echo $bidang ?></td>
                    <td><?php echo $deskripsi ?></td>
                    <td>
                        <a class="btn btn-warning" href="edit-pengajar?id=<?php echo $id ?>" role="button">Edit</a>
                        <a class="btn btn-danger" href="fungsi/hapus-pengajar?id=<?php echo $id ?>" onclick="return confirm('Hapus Pengajar?')" role="button">Delete</a>
                    </td> 
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
                 <div class="table-responsive">
            </div>
		</center>
	</aside>

<?php
	require_once "view/footer.php"
?>