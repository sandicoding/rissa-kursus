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

    <div id="datakamar2">
    <div>
        <?php

            $sql = $pdo->query("SELECT * FROM kursus");
            while($data = $sql->fetch()) {
                $id = $data['idkursus'];
                $tipe = $data['tipe'];
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
                                <img src="simpangambar/<?php echo $gambar ?>" width="200px" height="150px"/>
                                <div class="tipekamar">Harga/1 bulan + Pendaftaran</div>
                                
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p align="center"><i><b>Login</b> terlebih dahulu untuk mendaftar kursus</p></i>
                                
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