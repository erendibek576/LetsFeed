<?php
include('../db_connect.php');
if (isset($_POST["kaydet"])) {
    $sql= "UPDATE kullanici_verileri SET sifre=? WHERE eposta=? AND kurtarma=?";
    $dizi =[
    $_POST["sifre"],
        $_POST["eposta"],
        $_POST["kurtarma"]
        
    ];
    $sth=$db->prepare($sql);
    $sonuc =$sth->execute($dizi);
    header("Location:index.php");
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
			    <h2 class="mb-3">KULLANICI ŞİFRE DEĞİŞTİRME EKRANI </h2>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    
    <input class="form-control mb-2" placeholder="E-posta" name="eposta" required autofocus/>
      <input class="form-control mb-2" placeholder="Gönderilen 4 haneli kod" name="kurtarma" required autofocus/>        
     <input type="password" class="form-control " placeholder="Yeni Şifre" name="sifre" required ><br>;
	  <button class="w-100 btn btn-lg btn-primary" name="kaydet"> Kaydet </button>
                        </thead>
                        <tbody>

    </div>
    </main>
    <footer></footer>
</body>
</html>
 