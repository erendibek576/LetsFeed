<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
     <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Let'sFeed</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../assets/favicon.svg" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
        <!-- BootStrap -->
  </head>
  <body id="page-top" style="background-color:#FAFAFA" onload="myFunction()">
   <!-- Navigation-->
       <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color:#1f2628">
            <div class="container">
                <a class="navbar-brand" href="../index.php"><img src="../assets/img/LetsFeed_Logo.svg" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="../index.php">Anasayfa</a></li>
                        <li class="nav-item"><a class="nav-link" href="../info.php">Hakkımızda</a></li>
                        <li class="nav-item"><a class="nav-link" href="../contact.php">İLETİŞİM</a></li>
                       <?php
                       if ($_SESSION) {
                           echo '
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            '.$_SESSION["kadi"].'
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="UserProfile.php">Profil</a></li>
                                <li><a class="dropdown-item" href="../fileUpload.php">Resim Yükle</a></li>
                                <li><a class="dropdown-item" href="../cikis.php">Çıkış Yap</a></li>
                            </ul>
                            </li>
                        </ul>
                    </div>
                        ';
                       } else {
                           echo ' <li class="nav-item"><a class="nav-link" href="LogIn.php">Kullanıcı GİRİŞİ</a></li>';
                       }
                    
                        ?>
                    </ul>
                </div>
            </div>
        </nav>

	   
	   <div class="container" style="margin-top:120px">
<ul class="nav nav-tabs" style="font-size:20px">
  <li class="nav-item">
    <a class="nav-link" href="UserProfile.php">Profil Bilgileri</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="EmailVerification.php">E-Posta Doğrula</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="UpdatePassword.php">Şifre Değiştir</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="ChangePhoto.php" >Fotoğraf Değiştir</a>
  </li>
      <li class="nav-item">
    <a class="nav-link " href="UploadImage.php" >Yüklenen Fotoğraflar</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" href="DeleteAccount.php">Hesap Sil</a>
  </li>
</ul>

<div class="card" style="margin-top:20px">
<h2 style="margin-left:20px;margin-top:20px">E-Posta Doğrulama</h2>
<hr>
<form class="row g-3 needs-validation" name="form" action="" method="post" style="margin-left:10px" novalidate>
<div class="row g-3" >
<div class="col-md-3">
    <label for="validationCustom01" class="form-label">Kayıtlı e-posta adresiniz</label>
  
	
	</div>
	<div class="col-md-6">
	  <label id="email" for="validationCustom02"  class="form-label"  name="email"></label>
	</div>
	
	
	<div class="col-md-3">
	<button type="submit" class="btn btn-warning"  name="dogrula"> E-Postayı Doğrula</button>
	</div>
	<div class="col-md-6"></div>
	</div>
	</form>
</div>
</div>


<br><br><br><br><br><br><br><br><br><br><br><br><br>
<hr>
 <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Let'sFeed</div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
		
		<?php
        
        include('../db_connect.php');
        
          $id = $_SESSION['id'];
           $sorgu = $db->query("SELECT Ad,Soyad,eposta FROM kullanici_verileri Where id= '$id ' ");

    $cikti = $sorgu->fetch(PDO::FETCH_ASSOC);
        
        ini_set('display_errors', 1);
    error_reporting(E_ALL);
            
            
            
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\Exception;

            include '../admin/PHPMailer/src/SMTP.php';
        include '../admin/PHPMailer/src/PHPMailer.php';
        include '../admin/PHPMailer/src/Exception.php';
        
        if (isset($_POST['dogrula'])) {
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

       

            $mail->setFrom($cikti['eposta']);
            $mail->addAddress($cikti['eposta']);
        
            $mail->Subject = 'Lets Feed Ailesine Hoşgeldiniz';

            $icerik = "Merhaba"." ".$cikti['Ad']." ".$cikti['Soyad']."<br>"."<br>"
       ."Birçok küçük dostumuzun hayatına dokunarak renk katabilirsiniz."."<br>"."Email Bilginiz Başarıyla Doğrulanmıştır.
	   Bu sekmeyi kapatıp bir önceki sekmeye dönebilirsiniz."."<br>"."<br />";

            $mail->MsgHTML($icerik);
            $mail_gonder = $mail->send();
            if ($mail_gonder) {
                echo  "<script type='text/javascript'>alert('Mail Başarıyla Gönderildi !');</script>";
            } else {
                echo 'Mail gönderilemedi. Mail hata mesajı: '.
        $mail->ErrorInfo;
            }
        }
        ?>
		
    <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
		
		
		<script>
		
function myFunction() { 
document.getElementById("email").innerHTML = "<?php echo $cikti['eposta']; ?>";
}
</script>
  </body>
</html>