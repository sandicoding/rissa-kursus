<?php
	require_once "view/header.php";
?>

	<aside>
		<center>
            
            <div class="container text-left">
                <h3>Data jenis Seni</h3>
                <div class="table-responsive">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     $no = 1;
                        $sql = $pdo->query("SELECT * FROM tb_jenis_seni");
                        while ($caridata = $sql->fetch()) {
                        $nama = $caridata['nama'];
                        $id = $caridata['id'];
                       
                        
                    ?>
                    <tr>
                    <td><?= $no++ ?></td>
                    <td><?php echo $nama ?></td>
                    <td>
                        <a class="btn btn-warning" href="edit-jenis?id=<?php echo $id ?>" role="button">Edit</a>
                        <a class="btn btn-danger" href="fungsi/hapus-jenis?id=<?php echo $id ?>" onclick="return confirm('Hapus Jenis Seni?')" role="button">Delete</a>
                    </td> 
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
                </div>
            </div>
		</center>
	</aside>

<?php
	require_once "view/footer.php"
?>