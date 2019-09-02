<?php
require_once("config.php");
include("view/stok.php");
if(empty($_SESSION["status"])){
    header("Location:".$domain);
}
?>