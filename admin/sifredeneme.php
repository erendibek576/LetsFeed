<?php
include('../db_connect.php');
$min=1111;
$max=9999;
    
$kurtarma=mt_rand($min, $max);

include 'PHPMailer/src/SMTP.php';
include 'PHPMailer/src/PHPMailer.php';
include 'PHPMailer/src/Exception.php';

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
      
        header("Location:index.php");
    }
     
    if ($mail_gonder) {
        header("Location:uyesifre.php");
    } else {
        header("Location:sifredeneme.php");
        echo  $mail->ErrorInfo;
    }
}
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Let'sFeed</title>
    <link rel="shortcut icon" href="PageFiles/LogoLetsFeed.ico">
	
    <style>
        html,body{
            height: 100%;
        }
     body{
         padding: 40px 0px;
         display: flex;
         align-items: center;
         box-sizing: border-box;
         position: relative;    
         animation-name: example;
         animation-duration: 30s;
         animation-iteration-count: infinite;
         
     }
     a{
       text-decoration: none;
     }
     a:hover{
       text-decoration: none;
     }
     .bg-renk{
        background: linear-gradient(to top right, #474747 0%, #aeaeae 100%);
       }
     @keyframes example {
       0%{background-color:maroon;}
       25%{background-color:darkblue;}
       50%{background-color:gold;}
       75%{background-color: rgb(0, 88, 0);}
       100%{background-color:maroon}
     }
     .logo{
        width: 100px;
        height: 50px;
         animation-name: logo;
         animation-duration: 2s;
         animation-iteration-count: infinite;
     }
     @keyframes logo {
     0%   {width: 100px; height: 100px;}
     50%  {width: 100px; height: 100px;}
     100% {width: 100px; height: 100px;}
    }
    .login-form{
         width: 400px;
         margin: auto;
     }

     h2{
         color:white;
     }
     
    </style>
  </head>
  <body class="text-center">
      <main class="login-form">
          <form method="POST" name="form">
              <a href="Index.php">
                <img src="PageFiles/denemelogo.png" alt="Sayfa İkonu" class="mb-3 logo">
              </a>
			  
			    <h2 class="mb-3">MAİL ADRESİNİZİ GİRİNİZ </h2>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<form name="form" method="post" action="mail.php">
<body>
    
    <input class="form-control mb-2" placeholder="E-posta" name="eposta" required autofocus/>
	  <button class="w-100 btn btn-lg btn-primary" name="kod"> KOD GÖNDER </button>
                        </thead>
                        <tbody>

    </div>
    </main>
    <footer></footer>
</body>
</html>
 