<?php
require_once("config.php");
if(empty($_SESSION["status"])){
    header("Location:".$domain);
}
if($_GET["halaman"]=="tambah"){
    if(isset($_GET["id"])){
        $quotes_qry="SELECT * FROM tbl_garam WHERE id='".$_GET["id"]."' AND lv=2";
        $detail=mysqli_fetch_array(mysqli_query($connect,$quotes_qry));
        if(isset($_POST["total"])){
            $data1=array(
                "id_garam"  => $_GET["id"],
                "tanggal"  => $_POST["tanggal"],
                "jumlah"  => $_POST["jumlah"],
                "total"  => $_POST["total"],
                "laba"  => ($detail["harga_akhir"]-$detail["harga_awal"])*$_POST["jumlah"]
            );
            Insert("tbl_penjualan",$data1);
            $data2=array(
                "terjual"  => ($detail["terjual"]+$_POST["jumlah"])
            );
            Update("tbl_garam",$data2,"WHERE id = '".$_GET['id']."'");
            header("Location:".$domain."penjualan.php");
        }
        include("view/penjualan-tambah.php");
    }else{
        include("view/penjualan.php");
    }
}elseif($_GET["halaman"]=="ubah" && isset($_GET["id"])){
    $quotes_qry="SELECT * FROM tbl_penjualan WHERE id='".$_GET["id"]."'";
    $detail=mysqli_fetch_array(mysqli_query($connect,$quotes_qry));
    $quotes_qry2="SELECT * FROM tbl_garam WHERE id='".$detail["id_garam"]."' AND lv=2";
    $detail2=mysqli_fetch_array(mysqli_query($connect,$quotes_qry2));
    if(isset($_POST["total"])){
        $data2=array(
            "terjual"  => ($detail2["terjual"]+$_POST["jumlah"])
        );
        Update("tbl_garam",$data2,"WHERE id = '".$detail['id_garam']."'");
        $data1=array(
            "tanggal"  => $_POST["tanggal"],
            "jumlah"  => $_POST["jumlah"],
            "total"  => $_POST["total"],
            "laba"  => ($detail2["harga_akhir"]-$detail2["harga_awal"])*$_POST["jumlah"]
        );
        Update("tbl_penjualan",$data1,"WHERE id = '".$_GET['id']."'");
        header("Location:".$domain."penjualan.php");
    }
    include("view/penjualan-ubah.php");
}elseif($_GET["halaman"]=="hapus" && isset($_GET["id"])){
    Delete("tbl_penjualan","WHERE id = '".$_GET['id']."'");
    header("Location:".$domain."penjualan.php");
}else{
    include("view/penjualan-daftar.php");
}

?>