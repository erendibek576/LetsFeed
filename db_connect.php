<?php
try {
    $db=new Pdo("mysql:host=localhost; dbname=lets_feed; charset=utf8", "root", "");
} catch (Exception $error) {
    $e= $error->getMessage();
    echo '<script language="javascript">alert("db conenction error");</script>';
}
