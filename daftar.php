<?php
require_once "view/header.php";
if(isset($_POST['submit'])) {
$user = $_POST['user'];
$email = $_POST['email'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$pass = md5($_POST['pass']);

$sqlsimpan = $pdo->query("INSERT INTO tamu VALUES('', '$user', '$email', '$nama', '$alamat', '$telepon', '$pass', '')");

echo"<script>swal({
        type: 'success',
        title: 'Registrasi Sukses!',
        showConfirmButton: false,
        backdrop: 'rgba(0,0,123,0.5)',
        });
        window.setTimeout(function(){
            window.location.replace('login');
        } ,1500);</script>";
}
?>

<!-- ----konek--- -->
<link rel="stylesheet" type="text/css" href="styless.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/ css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h3 style="color: white">DAFTAR AKUN</h3>
  <div id="page" style="margin-top: 60px;">
    <center>
      <li>Silahkan Daftar Akun terlebih dahulu</li>
      <form method="post" action="daftar" enctype="multipart/form-data">
        <table>
          <tr>
            <td>Username</td>
            <td><input type="text" required="required" name="user"></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input type="Email" required="required" name="email"></td>
          </tr>
          <tr>
            <td>Nama Lengkap</td>
            <td><input type="text" required="required" name="nama"></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td><input type="text" required="required" name="alamat"></td>
          </tr>
          <tr>
            <td>Telepon</td>
            <td><input type="text" required="required" name="telepon"></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" required="required" name="pass"></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Daftar" style="background:rgba(255,0,0,0.8);;color:white;padding:10px;width:80px;border:1px solid #fff;"></td>
          </tr>
        </table>
      </form>
    </center>
  </div>

  <?php
    require_once "view/footer.php"
?>
