<?php
    require_once "view/header.php";

?>

<!-- ----konek--- -->
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/ css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- -------- -->

    <div class="kursus-awal">
        KURSUS<br><br>
            <p>Biaya / bulan : Rp. 400.000<br>Biaya Pendaftaran Awal : Rp. 125.000  </p><br>
            <p><i>*Harga dibawah sudah termasuk Biaya Pendaftaran dan Biaya Kursus 1 bulan</i></p>
    </div>
    <!-- <div id="imgindex">
        <div id="imglog">
            <h3>KURSUS<br></h3>
            <p>Biaya/bulan : Rp. 400.000<br>Biaya Pendaftaran Awal : Rp. 125.000  </p>
            <p>*Harga dibawah sudah termasuk biaya Pendaftaran dan Biaya kursus 1 bulan</p>
        </div>
    </div> -->
    <div id="datakamar2">
    <div>
        <?php

            $sql = $pdo->query("SELECT * FROM kursus");
            $sql2 = $pdo->query("SELECT tb_kursus.idkursus, tb_kursus.bidang, tb_kursus.gambar, tb_kursus.harga, tb_jenis_seni.nama as nama from tb_kursus INNER JOIN tb_jenis_seni ON tb_kursus.id_tipe = tb_jenis_seni.id");
            while($data = $sql2->fetch()) {
                $id = $data['idkursus'];
                $tipe = $data['nama'];
                $bidang = $data['bidang'];
                $harga = $data['harga'];
                $gambar = $data['gambar'];

                $angka = number_format($harga,0,",",".");

                
        ?>
        
            <div class="kamar">
                <form method="POST" action="pemesanan?id=<?php echo $id ?>">
                <table>
                    <tr>
                        <td>
                            <center>
                                
                                <div class="idkamar"> 
                                    <?php echo $tipe ?>
                                </div>
                                <div class="bidang"><b> <?php echo $bidang ?></div></b>
                                <div class="tipekamar"><b>Rp. <?php echo $angka ?></div></b>
                                <img src="../simpangambar/<?php echo $gambar ?>" width="200px" height="150px"/>
                                <div class="tipekamar">Harga/1 bulan + Pendaftaran</div>
                                
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <td>
                                <input style="cursor: pointer;" type="submit" name="klik" value="Daftar" class="tombolkursuspesan">
                                <!-- style="width:70px;background-color:#000;color:white;font-weight:bold;padding:4px;border:1px solid red; -->
                        </td>
                    </tr>
                </table>
                </form>
            </div>
            <?php
                    
                }
            ?>
    </div>
    </div>

<?php
    require_once "view/footer.php"
?>
