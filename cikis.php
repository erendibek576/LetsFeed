<?php
session_start();
unset($_SESSION['kadi']);
session_destroy();
echo "Çıkış yaptınız, Anasayfa'ya yönlendiriliyorsunuz.";
header("location:index.php");
