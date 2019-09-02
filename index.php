<?php
require_once("config.php");
if($_GET["halaman"]=="keluar"){
    session_destroy();
    session_abort();
    header("Location:".$domain);
}else{
    if(empty($_SESSION["status"])){
        if(isset($_POST["username"]) && isset($_POST["password"])){
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $profil_qry="SELECT * FROM tbl_pengguna WHERE username='".$username."' AND password='".$password."'";
            $profil=mysqli_fetch_assoc(mysqli_query($connect,$profil_qry));
            $cek=mysqli_num_rows(mysqli_query($connect,$profil_qry));
            if($cek > 0){
                $_SESSION['status'] = "masuk";
                $_SESSION['lv'] = $profil["lv"];
                $_SESSION['username'] = $profil["username"];
                header("location: $domain");
            }else{
            header("location: $domain");
            }
        }
        include("view/masuk.php");
    }else{
    include("view/dashboard.php");
    }
}
?>