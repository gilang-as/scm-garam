<?php
    error_reporting(0);
    session_start();
    require_once("function.php");
    $domain="http://localhost/scmgaram/";
    $hostname="localhost";
    $username="root";
    $password="";
    $database="scm_garam";
    $connect = new mysqli($hostname, $username, $password, $database);
if (!$connect) {
    die ("connection failed: " . mysqli_connect_error());
} else {
    $connect->set_charset('utf8');
}
?>