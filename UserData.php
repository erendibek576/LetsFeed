<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
if (isset($_POST["gonder"])) {
    $ad=$_POST["ad"];
    $Soyad=$_POST["soyad"];
    $kadi=$_POST["kadi"];
    $eposta=$_POST["eposta"];
    $sifre=$_POST["sifre"];
    $skurtarma=$_POST["kurtarma"];
    $imageCount=0;

    include('db_connect.php');
    $kayit_ol = $db ->query("insert into kullanici_verileri(Ad , Soyad , k_adi , eposta, sifre, kurtarma, image_count) values ('".$ad."','".$Soyad."','".$kadi."','".$eposta."','".$sifre."','".$skurtarma."','".$imageCount."')") -> fetch();
    header("location: LogIn.php");
}
