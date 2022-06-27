<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
if (isset($_POST["gonder"])) {
    $admin=$_POST["Admin"];
    $sifre=$_POST["Sifre"];

    
    include('../db_connect.php');
    $kayitt_ol = $db ->query("insert into admin(admin,sifre ) values ('".$admin."','".$sifre."')") -> fetch();
    header("location: Index.php");
}
