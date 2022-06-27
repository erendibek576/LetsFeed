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
     0%   {width: 100px; height: 50px;}
     50%  {width: 80px; height: 40px;}
     100% {width: 100px; height: 50px;}
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
          <form action="" method="POST" name="form">
              <a href="Index.php">
                <img src="PageFiles/LetsFeed.png" alt="Sayfa İkonu" class="mb-3 logo">
              </a>
              <h2 class="mb-3">Admin Girişi</h2>
          
              <input class="form-control mb-2" placeholder="Kullanıcı adı" name="admin" required autofocus/>
             
              <input type="password" class="form-control " placeholder="Şifre" name="adminsifre" required >
              <div class="mb-3">
                  <label style="color: white;">
                      <input type="checkbox" class="remember-me mt-3"> Beni hatırla
                </label>
              </div>
              <p style="color: white;"> <a href="UserSignIn.html">Hesabınız yok mu?</a></p>
              <p style="color: white;"> <a href="Userlogin.php">Kullanıcı Girişi </a></p>
            <button class="w-100 btn btn-lg btn-primary" name="gonder"> Giriş Yap </button>
              <p class="my-2 text-muted">2021</p>
          </form>
          <?php
          session_start();
           if (isset($_POST['gonder'])) {
               $adminname = $_POST['admin'];
               $adminsifre= $_POST['adminsifre'];
               include('../db_connect.php');
               $giris = $db ->query("SELECT * FROM admin WHERE admin = '$adminname ' AND sifre  = '$adminsifre' ") -> fetch();
               if ($giris) {
                   echo "<script> location.href='Panel.php'; </script> ";
                   $_SESSION["adminname"] = $adminname;
               } else {
                   echo "Başarısız Giriş Tekrar Deneyin";
               }
           }
?>
      </main>
  </body>
  </html>