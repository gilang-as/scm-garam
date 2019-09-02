<?php

include 'config.php';
require('pdf/fpdf.php');
if($_GET["type"]=="garam" && $_GET["lv"]=="1"){

    $pdf = new FPDF("L","cm","A4");

    $pdf->SetMargins(2,1,1);
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Times','B',11);
    $pdf->Image('assets/images/logo.png',1,1,2,2);
    $pdf->SetX(4);            
    $pdf->MultiCell(19.5,0.5,'Sistem Informasi Distribusi Garam',0,'C');
    $pdf->SetX(4);
    $pdf->MultiCell(19.5,0.5,'Telpon : 088-826-946-68',0,'C');    
    $pdf->SetFont('Arial','B',10);
    $pdf->SetX(4);
    $pdf->MultiCell(19.5,0.5,'Kec.Juwana Kab.Pati',0,'C');
    $pdf->SetX(4);
    $pdf->MultiCell(19.5,0.5,'website :www.umk.ac.id',0,'C');
    $pdf->Line(1,3.1,28.5,3.1);
    $pdf->SetLineWidth(0.1);      
    $pdf->Line(1,3.2,28.5,3.2);   
    $pdf->SetLineWidth(0);
    $pdf->ln(1);
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(25.5,0.7,"Laporan Data Garam",0,10,'C');
    $pdf->ln(1);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
    $pdf->ln(1);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
    $pdf->Cell(3, 0.8, 'Jenis', 1, 0, 'C');
    $pdf->Cell(4, 0.8, 'Suplier', 1, 0, 'C');
    $pdf->Cell(4, 0.8, 'Telepon', 1, 0, 'C');
    $pdf->Cell(4, 0.8, 'Alamat', 1, 0, 'C');
    $pdf->Cell(4.5, 0.8, 'modal', 1, 0, 'C');
    $pdf->Cell(2, 0.8, 'jumlah', 1, 1, 'C');
    $pdf->SetFont('Arial','',10);
    $quotes_qry="SELECT * FROM tbl_garam WHERE lv =1 ORDER BY id DESC";
                          $data=mysqli_query($connect,$quotes_qry);
                          $no=1;
                          while($lihat=mysqli_fetch_array($data)){ 
        $pdf->Cell(1, 0.8, $no , 1, 0, 'C');
        $pdf->Cell(3, 0.8, $lihat['jenis'], 1, 0,'C');
        $pdf->Cell(4, 0.8, $lihat['nama_petani'],1, 0, 'C');
        $pdf->Cell(4, 0.8, $lihat['telepon_petani'],1, 0, 'C');
        $pdf->Cell(4, 0.8, $lihat['alamat_petani'],1, 0, 'C');
        $pdf->Cell(4.5, 0.8, $lihat['harga_awal'], 1, 0,'C');
        $pdf->Cell(2, 0.8, $lihat['jumlah_awal'], 1, 1,'C');

        $no++;
    }

    $pdf->Output("laporan_buku.pdf","I");

}elseif($_GET["type"]=="garam" && $_GET["lv"]=="2"){
    $pdf = new FPDF("L","cm","A4");

    $pdf->SetMargins(2,1,1);
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Times','B',11);
    $pdf->Image('assets/images/logo.png',1,1,2,2);
    $pdf->SetX(4);            
    $pdf->MultiCell(19.5,0.5,'Sistem Informasi Distribusi Garam',0,'C');
    $pdf->SetX(4);
    $pdf->MultiCell(19.5,0.5,'Telpon : 088-826-946-68',0,'C');    
    $pdf->SetFont('Arial','B',10);
    $pdf->SetX(4);
    $pdf->MultiCell(19.5,0.5,'Kec.Juwana Kab.Pati',0,'C');
    $pdf->SetX(4);
    $pdf->MultiCell(19.5,0.5,'website :www.umk.ac.id',0,'C');
    $pdf->Line(1,3.1,28.5,3.1);
    $pdf->SetLineWidth(0.1);      
    $pdf->Line(1,3.2,28.5,3.2);   
    $pdf->SetLineWidth(0);
    $pdf->ln(1);
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(25.5,0.7,"Laporan Data Garam",0,10,'C');
    $pdf->ln(1);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
    $pdf->ln(1);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
    $pdf->Cell(7, 0.8, 'Kategori', 1, 0, 'C');
    $pdf->Cell(3, 0.8, 'Jenis', 1, 0, 'C');
    $pdf->Cell(4, 0.8, 'Suplier', 1, 0, 'C');
    $pdf->Cell(4.5, 0.8, 'modal', 1, 0, 'C');
    $pdf->Cell(4.5, 0.8, 'harga', 1, 0, 'C');
    $pdf->Cell(2, 0.8, 'jumlah', 1, 1, 'C');
    $pdf->SetFont('Arial','',10);
    $quotes_qry="SELECT * FROM tbl_garam WHERE lv =2 ORDER BY id DESC";
                          $data=mysqli_query($connect,$quotes_qry);
                          $no=1;
                          while($lihat=mysqli_fetch_array($data)){ 
        $pdf->Cell(1, 0.8, $no , 1, 0, 'C');
        $pdf->Cell(7, 0.8, $lihat['kategori'],1, 0, 'C');
        $pdf->Cell(3, 0.8, $lihat['jenis'], 1, 0,'C');
        $pdf->Cell(4, 0.8, $lihat['nama_petani'],1, 0, 'C');
        $pdf->Cell(4.5, 0.8, $lihat['harga_awal'], 1, 0,'C');
        $pdf->Cell(4.5, 0.8, $lihat['harga_akhir'],1, 0, 'C');
        $pdf->Cell(2, 0.8, $lihat['jumlah_awal'], 1, 1,'C');

        $no++;
    }

    $pdf->Output("laporan_buku.pdf","I");

}elseif($_GET["type"]=="penjualan"){
    if(isset($_GET["dari"]) && isset($_GET["sampai"])){
        
$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',11);
$pdf->Image('assets/images/logo.png',1,1,2,2);
$pdf->SetX(4);            
$pdf->MultiCell(19.5,0.5,'Sistem Informasi Distribusi Garam',0,'c');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Telpon : 088-826-946-68',0,'c');    
$pdf->SetFont('Arial','B',10);
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'Kec.Juwana Kab.Pati',0,'c');
$pdf->SetX(4);
$pdf->MultiCell(19.5,0.5,'website :www.umk.ac.id',0,'c');
$pdf->Line(1,3.1,28.5,3.1);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,3.2,28.5,3.2);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,0.7,'Laporan Data Penjualan Garam',0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D-d/m/Y"),0,0,'C');
$pdf->ln(1);
$pdf->Cell(6,0.7,"Dari : ".$_GET['dari'] ." Sampai ".$_GET['sampai'],0,0,'C');
$pdf->ln(1);
$pdf->Cell(1, 0.8, 'NO', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Tanggal', 1, 0, 'C');
$pdf->Cell(6, 0.8, 'Kategori', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Jumlah', 1, 0, 'C');
$pdf->Cell(3, 0.8, 'Harga', 1, 0, 'C');
$pdf->Cell(4.5, 0.8, 'Total harga', 1, 0, 'C');
$pdf->Cell(4, 0.8, 'laba', 1, 1, 'C');

$no=1;
$dari=$_GET['dari'];
$sampai=$_GET['sampai'];
// $pdf->Cell(1, 0.8, date($dari), 1, 0, 'C');
$quotes_qry="select * from tbl_penjualan inner join tbl_garam on tbl_penjualan.id_garam = tbl_garam.id where tanggal>='$dari' and tanggal<='$sampai' order by tanggal asc";
                          $data=mysqli_query($connect,$quotes_qry);
                          $no=1;
                          while($lihat=mysqli_fetch_array($data)){ 
	$pdf->Cell(1, 0.8, $no , 1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['tanggal'],1, 0, 'C');
	$pdf->Cell(6, 0.8, $lihat['kategori'],1, 0, 'C');
	$pdf->Cell(3, 0.8, $lihat['jumlah'], 1, 0,'C');
	$pdf->Cell(3, 0.8, "Rp. ".number_format($lihat['harga_awal'])." ,-", 1, 0,'C');
	$pdf->Cell(4.5, 0.8, "Rp. ".number_format($lihat['total'])." ,-",1, 0, 'C');
	$pdf->Cell(4, 0.8, "Rp. ".number_format($lihat['laba'])." ,-", 1, 1,'C');	
	
	$no++;
}
$q=mysqli_query($connect,"select sum(total) as total from tbl_penjualan where tanggal>='$dari' and tanggal<='$sampai' order by tanggal asc");

while($total=mysqli_fetch_array($q)){
	$pdf->Cell(16, 0.8, "Total Pendapatan", 1, 0,'C');		
	$pdf->Cell(4.5, 0.8, "Rp. ".number_format($total['total'])." ,-", 1, 0,'C');	
}
$qu=mysqli_query($connect,"select sum(laba) as total_laba from tbl_penjualan where tanggal>='$dari' and tanggal<='$sampai' order by tanggal asc");

while($tl=mysqli_fetch_array($qu)){
	$pdf->Cell(4, 0.8, "Rp. ".number_format($tl['total_laba'])." ,-", 1, 1,'C');	
}
$pdf->Output("laporan_buku.pdf","I");
    }else{
        include("view/laporan-penjualan.php");
    }
}
?>