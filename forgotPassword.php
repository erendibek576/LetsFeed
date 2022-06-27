<?php

include('db_connect.php');
$min=1111;
$max=9999;
    
$kurtarma=mt_rand($min, $max);

include 'admin/PHPMailer/src/SMTP.php';
include 'admin/PHPMailer/src/PHPMailer.php';
include 'admin/PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\Exception;

if (isset($_POST["kod"])) {
    $kposta=$_POST['eposta'];

    $mail = new PHPMailer();
    $mail->Host = "smtp.gmail.com";
    $mail->Username = 'letsfeed1@gmail.com';
    $mail->Password = '2001111IGU';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->isHTML(true);
    $mail->CharSet = "UTF-8";
    $mail->setLanguage('tr', 'PHPMailer/language//');
    //$mail->SMTPDebug  = 2;
    $mail->setFrom($kposta);
    $mail->addAddress($kposta);

    $mail->Subject = 'İletişim Formu';

    $icerik = "Merhaba"."<br>"."<br>"
."ŞİFRE DEĞİŞTİRME KODUNUZ"."<br>"."<br />".$kurtarma."";

    $mail->MsgHTML($icerik);
    $mail_gonder = $mail->send();
    if (isset($_POST["kod"])) {
        $sql= "UPDATE kullanici_verileri SET kurtarma=?  WHERE eposta=? ";
 
        $dizi =[
    $kurtarma,
     $kposta
    ];
        $sth=$db->prepare($sql);
        $sonuc =$sth->execute($dizi);
    }
    if ($mail_gonder) {
        $cookie_name = "mailUser";
        $cookie_value = $_POST["eposta"];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
        header("Location:uyeSifreDegis.php");
    } else {
        header("Location:forgotPassword.php");
        echo  $mail->ErrorInfo;
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hello, world!</title>
    <link rel="stylesheet" href="css/girisCss.css">
  
</head>
    <body>
    <div class="container-fluid">
    <div class="row">
    <div class="col-sm-5 col-md-7 intro-section">
            <div class="brand-wrapper  d-md-flex">
               <div class="d-flex justify-content-center img-1 "><a href="Index.php"> <img src="assets/img/cover.svg" alt="" style="width:100px; "></a></div>
               <div class="d-flex justify-content-center align-items-center m-2 ltsfeed">Let'sFeed</div>
            </div>
            <div class="col-sm-6 quote d-sm-none d-md-block">
               "Her canlının bu dünyada yaşamaya hakkı vardır!"
            </div>
        </div>
        <div class="col-sm-6 col-md-5 form-section">
            <div class="login-wrapper">
                <h3 class="login-title">Şifremi Unuttum</h3>
                <form method="post" name="form" action="">
                    <div class="form-group mb-2"> <label class="sr-only">E-Posta :</label> 
                    <input type="text" name="eposta" class="form-control" placeholder="Sisteme Kayıtlı  E-Posta" required> </div>
                    <div class="d-flex justify-content-between align-items-center mb-5">
                    <button name="kod" class="btn login-btn" style="width:200px">Kod Gönder</button>
                 </div>
                </form>
                <p class="login-wrapper-footer-text">Bir hesabınız yok mu? <a href="SignIn.php" class="text-reset"><b>Kayıt Olun</b></a></p>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>