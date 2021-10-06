<?php
// memanggil library FPDF
require('../lib/fpdf.php');
$bln = $_GET['bln'];
$thn = $_GET['thn'];
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(275,7,'LAPORAN INFORMASI PENDAFTARAN KURSUS RUMAH MUSIK HARRY ROESLI',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(275,7,'DATA TRANSAKSI PENDAFTARAN KURSUS',0,1,'C');
 
$pdf->Line(300,23,-300,23);
$pdf->Line(300,23.5,-300,23.5);
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
include 'fungsi/koneksi.php';
$bayar = $pdo->query("SELECT * From pemesanan WHERE month(created_at) = '$bln' AND year(created_at) = '$thn' ORDER BY idpesan ASC");
$row1 = $bayar->fetch();
$pdf->SetFont('Arial','B',12);
$pdf->Cell(30,6,'Bulan				:	'. date("F", strtotime($row1['created_at'])),0,1,'C');

$jumlah = $bayar->rowCount();
$pdf->Cell(38,6,'Jumlah		:	'.$jumlah. ' Siswa' ,0,1,'C');


$pdf->SetFont('Arial','B',10);
$pdf->Cell(60,6,'TANGGAL',1,0,'C');
$pdf->Cell(15,6,'KODE',1,0,'C');
$pdf->Cell(60,6,'NAMA',1,0,'C');
$pdf->Cell(45,6,'TELEPON',1,0,'C');
$pdf->Cell(35,6,'TIPE',1,0,'C');
$pdf->Cell(35,6,'BIDANG',1,0,'C');
$pdf->Cell(25,6,'HARGA',1,0,'C');

 
$pdf->SetFont('Arial','',10);


 





$bayar1 = $pdo->query("SELECT * From pemesanan WHERE month(created_at) = '$bln' AND year(created_at) = '$thn' ORDER BY idpesan ASC");
while ($row = $bayar1->fetch()){
	$pdf->Cell(10,7,'',0,1);
    $pdf->Cell(60,6,$row['created_at'],1,0,'C');
    $pdf->Cell(15,6,$row['idpesan'],1,0,'C');
	$pdf->Cell(60,6,$row['nama'],1,0,'C');
    $pdf->Cell(45,6,$row['telepon'],1,0,'C');
    $pdf->Cell(35,6,$row['tipe'],1,0,'C');
    $pdf->Cell(35,6,$row['bidang'],1,0,'C');
    $pdf->Cell(25,6,$row['harga'],1,0,'C'); 
   
    
   

}
 $pdf->SetFont('Arial','B',10);

$bayar2 = $pdo->query("SELECT SUM(harga) as total From pemesanan WHERE month(created_at) = '$bln' AND year(created_at) = '$thn' ORDER BY idpesan ASC");
$data = $bayar2->fetch();
$pdf->Cell(10,9,'',0,1);
$pdf->Cell(50,6,'Total Pendapatan : '. $data['total'],1,0); 
$pdf->Output();
?>