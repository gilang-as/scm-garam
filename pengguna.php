<?php
require_once("config.php");
if(empty($_SESSION["status"])){
    header("Location:".$domain);
}
if($_GET["halaman"]=="tambah"){
    if(isset($_POST["username"])){
        $data=array(
            "username"  => $_POST["username"],
            "password"  => md5($_POST["password"]),
            "lv"  => $_POST["level"]
        );
        Insert("tbl_pengguna",$data);
        header("Location:".$domain."pengguna.php");
    }
    include("view/pengguna-tambah.php");
}elseif($_GET["halaman"]=="ubah" && isset($_GET["id"])){
    $quotes_qry="SELECT * FROM tbl_pengguna WHERE username='".$_GET["id"]."'";
    $detail=mysqli_fetch_array(mysqli_query($connect,$quotes_qry));
    if(isset($_POST["username"])){
        $data=array(
            "username"  => $_POST["username"],
            "password"  => md5($_POST["password"]),
            "lv"  => $_POST["level"]
        );
        Update("tbl_pengguna",$data,"WHERE username = '".$_GET['id']."'");
        header("Location:".$domain."pengguna.php");
    }
    include("view/pengguna-ubah.php");
}elseif($_GET["halaman"]=="hapus" && isset($_GET["id"])){
    Delete("tbl_pengguna","WHERE username = '".$_GET['id']."'");
    header("Location:".$domain."pengguna.php");
}else{
    include("view/pengguna-daftar.php");
}

?>