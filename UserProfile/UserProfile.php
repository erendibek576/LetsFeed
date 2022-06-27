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
    <a class="nav-link active" href="UserProfile.php">Profil Bilgileri</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="EmailVerification.php">E-Posta Doğrula</a>
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
<h2 style="margin-left:20px;margin-top:20px">Profil Bilgilerim</h2>
<hr>
<form class="row g-3 needs-validation" name="form" action="" method="post" style="margin-left:10px"  novalidate>



<div class="row g-3">
<div class="col-md-4">
    <label for="validationCustom01" placeholder="Ad" class="form-label">Ad</label>
    <input type="text" class="form-control" id="validationCustom01" name="ad" required>
	</div>
	
	<div class="col-md-4">
    <label for="validationCustom02" class="form-label">Soyad</label>
    <input type="text" class="form-control" id="validationCustom02" name="soyad" required>
	</div>
	
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Kullanıcı Adı</label> 
      <input type="text" class="form-control" id="validationCustomUsername" name="k_adi" required>
  </div>
	</div>
	<div class="row g-3">
	<div class="col-md-4">
    <label for="validationCustom03" class="form-label">Email</label>
    <input type="text" class="form-control" id="validationCustom03" name="email" required>
	</div>
	<div class="col-md-4">
    <label for="validationCustom04" class="form-label">Cep Telefon</label>
    <input type="text" class="form-control" id="validationCustom04" name="telefon" required>
	</div>
	<div class="col-md-4">
	 <label for="validationCustom05" class="form-label">İl</label>
 <select class="form-select" id="validationCustom05" name="il" required>
      <option selected disabled value="">İl seçiniz</option>
      <option value="Adana">Adana</option>
	<option value="Adıyaman">Adıyaman</option>
	<option value="Afyon">Afyon</option>
	<option value="Ağrı">Ağrı</option>
	<option value="Amasya">Amasya</option>
	<option value="Ankara">Ankara</option>
	<option value="Antalya">Antalya</option>
	<option value="Artvin">Artvin</option>
	<option value="Aydın">Aydın</option>
	<option value="Balıkesir">Balıkesir</option>
	<option value="Bilecik">Bilecik</option>
	<option value="Bingöl">Bingöl</option>
	<option value="Bitlis">Bitlis</option>
	<option value="Bolu">Bolu</option>
	<option value="Burdur">Burdur</option>
	<option value="Bursa">Bursa</option>
	<option value="Çanakkale">Çanakkale</option>
	<option value="Çankırı">Çankırı</option>
	<option value="Çorum">Çorum</option>
	<option value="Denizli">Denizli</option>
	<option value="Diyarbakır">Diyarbakır</option>
	<option value="Edirne">Edirne</option>
	<option value="Elazığ">Elazığ</option>
	<option value="Erzincan">Erzincan</option>
	<option value="Erzurum">Erzurum</option>
	<option value="Eskişehir">Eskişehir</option>
	<option value="Gaziantep">Gaziantep</option>
	<option value="Giresun">Giresun</option>
	<option value="Gümüşhane">Gümüşhane</option>
	<option value="Hakkari">Hakkari</option>
	<option value="Isparta">Isparta</option>
	<option value="Mersin">Mersin</option>
	<option value="İstanbul">İstanbul</option>
	<option value="İzmir">İzmir</option>
	<option value="Kars">Kars</option>
	<option value="Kastamonu">Kastamonu</option>
	<option value="Kayseri">Kayseri</option>
	<option value="Kırklareli">Kırklareli</option>
	<option value="Kırşehir">Kırşehir</option>
	<option value="Kocaeli">Kocaeli</option>
	<option value="Konya">Konya</option>
	<option value="Kütahya">Kütahya</option>
	<option value="Malatya">Malatya</option>
	<option value="Manisa">Manisa</option>
	<option value="K.maraş">K.maraş</option>
	<option value="Mardin">Mardin</option>
	<option value="Muğla">Muğla</option>
	<option value="Muş">Muş</option>
	<option value="Nevşehir">Nevşehir</option>
	<option value="Niğde">Niğde</option>
	<option value="Ordu">Ordu</option>
	<option value="Rize">Rize</option>
	<option value="Sakarya">Sakarya</option>
	<option value="Samsun">Samsun</option>
	<option value="Siirt">Siirt</option>
	<option value="Sinop">Sinop</option>
	<option value="Sivas">Sivas</option>
	<option value="Tekirdağ">Tekirdağ</option>
	<option value="Tokat">Tokat</option>
	<option value="Trabzon">Trabzon</option>
	<option value="Tunceli">Tunceli</option>
	<option value="Şanlıurfa">Şanlıurfa</option>
	<option value="Uşak">Uşak</option>
	<option value="Van">Van</option>
	<option value="Yozgat">Yozgat</option>
	<option value="Zonguldak">Zonguldak</option>
	<option value="Aksaray">Aksaray</option>
	<option value="Bayburt">Bayburt</option>
	<option value="Karaman">Karaman</option>
	<option value="Kırıkkale">Kırıkkale</option>
	<option value="Batman">Batman</option>
	<option value="Şırnak">Şırnak</option>
	<option value="Bartın">Bartın</option>
	<option value="Ardahan">Ardahan</option>
	<option value="Iğdır">Iğdır</option>
	<option value="Yalova">Yalova</option>
	<option value="Karabük">Karabük</option>
	<option value="Kilis">Kilis</option>
	<option value="Osmaniye">Osmaniye</option>
	<option value="Düzce">Düzce</option>
	
    </select>
	</div>
	</div>
	<div class="row g-3">
	<div class="col-md-4">
	<label for="validationCustom06" class="form-label">Doğum Tarihi</label>
          <input type='date' class="form-control" id="validationCustom06" name="dogum_tarih"/>
        </div>
		
		<div class="col-md-4">
	<label for="validationCustom07" class="form-label">Cinsiyet</label>
          <select name="cinsiyet" class="form-select" id="validationCustom07"  required>
      <option selected disabled value="">Cinsiyet seçiniz</option>
      <option value="erkek">Erkek</option>
	  <option value="kadın">Kadın</option>
    </select>
         
        </div>
		<div class="col-md-4">
		</div>
		
		<div class="row g-3">
		<div class="col-md-10">
		</div>
		<div class="col-md-2">
		<button type="submit" class="btn btn-warning" name="kaydet"> KAYDET</button>
		</div>
		<div class="col"></div>
      </div> 
	  
      </div>
</form>
</div>
</div>

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
		
	  <?php
      
      
      include('../db_connect.php');
      
       $id = $_SESSION['id'];
           $sorgu = $db->query("SELECT Ad,Soyad,k_adi,eposta,cep_telefon,il,dogum_tarih,cinsiyet FROM kullanici_verileri Where id= '$id ' ");

    $cikti = $sorgu->fetch(PDO::FETCH_ASSOC);
    
    
    
if (isset($_POST['kaydet'])) {
    $kadi=$_POST['ad'];
    $ksoyad=$_POST['soyad'];
    $k_adi=$_POST['k_adi'];
    $kemail=$_POST['email'];
    $ktelefon=$_POST['telefon'];
    $kil=$_POST['il'];
    $ktarih=$_POST['dogum_tarih'];
    $kcinsiyet=$_POST['cinsiyet'];
    
    
    $id= $_SESSION['id'];
    

    if (empty($kadi)|| empty($ksoyad) || empty($k_adi) || empty($kemail) || empty($ktelefon) || empty($kil) || empty($ktarih) || empty($kcinsiyet)) {
        echo "<script type='text/javascript'>alert('Lütfen profil bilgilerinizi tam doldurunuz !');</script>";
    } else {
        $kaydet=$db->exec("UPDATE kullanici_verileri SET Ad='$kadi',Soyad='$ksoyad',k_adi='$k_adi',eposta='$kemail',cep_telefon='$ktelefon',il='$kil',
	dogum_tarih='$ktarih',cinsiyet='$kcinsiyet' WHERE Id='$id'");

        if ($kaydet) {
            echo "<script type='text/javascript'>alert('Bilgileriniz Başarıyla Güncellendi, Lütfen Sayfayı Yenileyiniz !');</script>";
        }
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
         <script>
		 function myFunction() { 
document.getElementById("validationCustom01").value = "<?php echo $cikti['Ad']; ?>";
document.getElementById("validationCustom02").value = "<?php echo $cikti['Soyad']; ?>";
document.getElementById("validationCustomUsername").value = "<?php echo $cikti['k_adi']; ?>";
document.getElementById("validationCustom03").value = "<?php echo $cikti['eposta']; ?>";
document.getElementById("validationCustom04").value = "<?php echo $cikti['cep_telefon']; ?>";
document.getElementById("validationCustom05").value = "<?php echo $cikti['il']; ?>";
document.getElementById("validationCustom06").value = "<?php echo $cikti['dogum_tarih']; ?>";
document.getElementById("validationCustom07").value = "<?php echo $cikti['cinsiyet']; ?>";
}
</script>
		 
  </body>
</html>

		