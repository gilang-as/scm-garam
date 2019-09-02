<?php
require_once("config.php");
if(empty($_SESSION["status"])){
    header("Location:".$domain);
}
if($_GET["halaman"]=="tambah"){
    if(isset($_POST["nama_petani"])){
        $data=array(
            "nama_petani"  => $_POST["nama_petani"],
            "alamat_petani"  => $_POST["alamat_petani"],
            "telepon_petani"  => $_POST["telepon_petani"],
            "jenis"  => $_POST["jenis"],
            "harga_awal"  => $_POST["harga"],
            "jumlah_awal"  => $_POST["jumlah"],
            "lv"  => 1
        );
        Insert("tbl_garam",$data);
        header("Location:".$domain."garam.php");
    }
    include("view/garam-tambah.php");
}elseif($_GET["halaman"]=="ubah" && isset($_GET["id"])){
    $quotes_qry="SELECT * FROM tbl_garam WHERE id='".$_GET["id"]."'";
    $detail=mysqli_fetch_array(mysqli_query($connect,$quotes_qry));
    if(isset($_POST["nama_petani"])){
        $data=array(
            "nama_petani"  => $_POST["nama_petani"],
            "alamat_petani"  => $_POST["alamat_petani"],
            "telepon_petani"  => $_POST["telepon_petani"],
            "jenis"  => $_POST["jenis"],
            "harga_awal"  => $_POST["harga"],
            "jumlah_awal"  => $_POST["jumlah"]
        );
        Update("tbl_garam",$data,"WHERE id = '".$_GET['id']."'");
        header("Location:".$domain."garam.php");
    }
    include("view/garam-ubah.php");
}elseif($_GET["halaman"]=="hapus" && isset($_GET["id"])){
    Delete("tbl_garam","WHERE id = '".$_GET['id']."'");
    header("Location:".$domain."garam.php");
}else{
    include("view/garam-daftar.php");
}

?>