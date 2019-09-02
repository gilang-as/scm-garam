<?php
require_once("config.php");
if(empty($_SESSION["status"])){
    header("Location:".$domain);
}
if($_GET["halaman"]=="ubah" && isset($_GET["id"])){
    $quotes_qry="SELECT * FROM tbl_garam WHERE id='".$_GET["id"]."'";
    $detail=mysqli_fetch_array(mysqli_query($connect,$quotes_qry));
    if(isset($_POST["kategori"])){
        $data=array(
            "kategori"  => $_POST["kategori"],
            "harga_akhir"  => $_POST["harga"],
            "lv"  => 2

        );
        Update("tbl_garam",$data,"WHERE id = '".$_GET['id']."'");
        header("Location:".$domain."produksi.php");
    }
    include("view/produksi-ubah.php");
}elseif($_GET["halaman"]=="hapus" && isset($_GET["id"])){
    Delete("tbl_garam","WHERE id = '".$_GET['id']."'");
    header("Location:".$domain."produksi.php");
}else{
    include("view/produksi-daftar.php");
}

?>