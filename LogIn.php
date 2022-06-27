<?php
session_start();
if ($_SESSION) {
    header("location:index.php");
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

    <!-- Fonts Google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&family=Lobster&family=Roboto+Slab:wght@500&family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">

</head>
    <body>
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 col-md-7 intro-section">
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
                <h3 class="login-title">Giriş Yap</h3>
                <form method="post" name="form">
            

                    <div class="form-group mb-2"> <label class="sr-only">Kullanıcı Adı :</label> 
                    <input type="text" name="kadi" id="kadi" class="form-control" placeholder="Kullanıcı Adı" required> </div>


                    <div class="form-group mb-2"> <label class="sr-only">Şifre :</label> 
                    <input type="password" name="sifre" id="sifre" class="form-control" placeholder="Şifre" required> </div>
                    

                    <div class="d-flex justify-content-between align-items-center mb-5">
                    <button name="gonder" class="btn login-btn">Giriş yap</button>


                    <a href="forgotPassword.php" class="forgot-password-link">Şifrenizi mi unuttunuz?</a>
                 </div>
                </form>
                <p class="login-wrapper-footer-text">Bir hesabınız yok mu? <a href="SignIn.php" class="text-reset"><b>Kayıt Olun</b></a></p>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST["gonder"])) {
    $kadi=$_POST["kadi"];
    $sifre=$_POST["sifre"];
    
    include('./db_connect.php');
    
    $giris = $db ->query("SELECT Id FROM kullanici_verileri WHERE k_adi = '$kadi' and sifre = '$sifre'") -> fetch();

    if ($giris) {
        $_SESSION['kadi']=$kadi;
        $_SESSION['id']=$giris['Id'];
        header("location: Index.php");
    } else {
        echo "<span style='color:white'>Adınız veya şifreniz hatalı, Tekrar deneyiniz !</span>";
    }
}
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>