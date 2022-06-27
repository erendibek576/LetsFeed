<?php
session_start();
?>
<!DOCTYPE html>
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
            <div class="container" >
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
    <a class="nav-link" href="EmailVerification.php">E-Posta Doğrula</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="UpdatePassword.php">Şifre Değiştir</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="ChangePhoto.php" >Fotoğraf Değiştir</a>
  </li>
     <li class="nav-item">
    <a class="nav-link  active" href="UploadImage.php" >Yüklenen Fotoğraflar</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" href="DeleteAccount.php">Hesap Sil</a>
  </li>
</ul>

<div class="card" style="margin-top:20px">
<h2 style="margin-left:20px;margin-top:20px">Yüklediğiniz Fotoğraflar</h2>
<hr>
 <!-- Images -->
          <form class="row g-3 needs-validation" name="form" action="" method="post" style="margin-left:10px"  novalidate>
                <div class="row g-3">
                    
                        <!-- Portfolio item 1-->
                        <?php
                            include("../db_connect.php");
                            
                            $kadi= $_SESSION['kadi'];
                            
                            
                            $resim=$db->prepare("select * from images where user_name = '$kadi' ORDER BY image_id ASC  ");
                            $resim->execute(array());
                            $d= $resim->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($d as $m) {
                                echo '<div class="col-md-3">';
                                echo '<div class="card" >';
                                echo '  <div class="portfolio-item shadow-sm">';
                                echo "    <center>  <img class='img-fluid'  style='min-width:760px min-height:450px;'src='../$m[image_name]' alt='...'  /></center>";
                                echo '      <div class="portfolio-caption">';
                                echo "          <div class='portfolio-caption-subheading' style='text-align:center;margin-top:20px;'>$m[user_name]</div>";
                                echo '          <div class="portfolio-caption-subheading text-muted"> 
								                   <div class="btn-group" role="group" aria-label="Basic example">
								                   <button type="submit" class="btn btn-primary" name="sil" style="margin-left:20px;margin-top:20px;">SİL</button>
												  </div></div><br>';
                                                 
                                echo '     </div>';
                                
                                echo '  </div>';
                                
                                echo '</div>';
                                echo '</div>';
                                   
                                    
                                    
                                    
                                if (isset($_POST['sil'])) {
                                    $sil=$db->exec("DELETE FROM images WHERE user_name = '$kadi'");
                    
                                    if ($sil) {
                                        echo "<script type='text/javascript'>alert('Silme İşlemi Başarılı !');</script>";
                                    }
                                }
                            }
                        ?>
				
                </div>
				</form>
				<br>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<hr>
 <!-- Footer-->
        <footer class="footer py-4" >
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
		
		 <!-- Bootstrap core JS-->
        
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
