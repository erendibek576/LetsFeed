<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body, html {
        height: 100%;
}

* {
  box-sizing: border-box;
  font-size:13px;
}

.bg-image {
  background-image: url("PageFiles/Wallpaper.jpg");
  filter: blur(8px);
  -webkit-filter: blur(8px);
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.bg-text {
  background-color: rgb(0,50,0); /* Fallback color */
  background-color: #F7F7F7; /* Black w/opacity/see-through */
  color: black;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  border-radius:30px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 60%;
  padding: 30px;
  text-align: center;
  box-shadow: 0 0 35px black;
}
.btn {
	display: block;
	width: 250px;
	height: 40px;
	background: #FDC030;
	color: #fff;
	border-radius: 16px;
	border: 0;
    margin:auto;
	box-shadow: 0 2px 5px 0px red;
	transition: all 0.3s ease-in-out;
	font-size: 15px;
}
.dropzone {
	width: 250px;
	height: 130px;
    margin:auto;
    margin-bottom:15px;
	border: 3px dashed #999;
	border-radius: 50px;
	text-align: center;
}

.btn:hover {
	background: green;
	box-shadow: 0 3px 0 0 ;
    color:white;
}
.upload-icon {
	margin: 50px 2px 2px 2px;
}
.upload-input {
	position: relative;
	top: -62px;
	left: 0;
	width: 100%;
	height: 100%;
	opacity: 0;
}
.alert{
    position: fixed;
    z-index:999;
    top: 5%;
}
.title{
padding:20px;
}
.slideUp {
  animation-name: slideUp;
  -webkit-animation-name: slideUp;
  animation-duration: 1s;
  -webkit-animation-duration: 1s;
  visibility: visible;
}
.img{
  width:30%;
}
@keyframes slideUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(70%);
  } 
  100% {
    opacity: 1;
    -webkit-transform: translateY(0%);
  }
}

@-webkit-keyframes slideUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(70%);
  } 
  100% {
    opacity: 1;
    -webkit-transform: translateY(0%);
  }
}
@media only screen and (max-width : 576px) {
  .dropzone {
	width: 170px;
	height: 110px;
    margin:auto;
    margin-bottom:15px;
	border: 2px dashed black;
	border-radius: 50px;
	text-align: center;
}
.btn {
	display: block;
	width: 170px;
	height: 40px;
	background: #FDC030;
	color: #fff;
	border-radius: 16px;
	border: 0;
    margin:auto;
	box-shadow: 0 2px 5px 0px red;
	transition: all 0.3s ease-in-out;
	font-size: 15px;
}
.bg-text {
  background-color: #F7F7F7; /* Black w/opacity/see-through */
  color: black;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  border-radius:30px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 30px;
  text-align: center;
  box-shadow: 0 0 35px black;
}
  .img{
  width:50%;
  }

}


    </style>
</head>
<body>

 
<div class="bg-image">
</div>


<form action="" method="post" enctype="multipart/form-data">
    <div class="bg-text">
          <div class="title">
            <img src="assets\img\cover.svg" alt=""class="img">
		    	<h3>Dosyanızı eklemek için sürükleyin veya yükleme simgesine tıklayın</h3>
	        </div>
	    	<div class="dropzone">
		    	<img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon" />
			    <input type="file" class="upload-input" name="photo"/>
	        </div>
              <input type="submit" name="gonder" value="Yükle" class="btn">
            </div>
    </div>       
</form>

<?php
  
  include('db_connect.php');
  if (!isset($_SESSION['kadi'])) {
      header("location:index.php");
  }
  
  if ($_FILES) {
      $maxBoyut=4000000;
      $dosyaUzantisi=substr($_FILES["photo"]["name"], -4, 4);
      $dosyaAdi=$_SESSION['id']."_".rand(0, 99999999).$dosyaUzantisi;
      $dosyayolu="resimler/".$dosyaAdi;
      $tmp_name=$_FILES["photo"]["tmp_name"];
    
      
      if ($_FILES["photo"]["size"]>$maxBoyut) {
          echo "<script> alert('Dosya boyutu 4 MBdan büyük olamaz!')</script>";
      } else {
          $dosya=$_FILES["photo"]["type"];
          if ($dosya=="image/jpeg" || $dosya=="image/png" || $dosya=="image/heic") {
              if (is_uploaded_file($_FILES["photo"]["tmp_name"])) {
                  include('SimpleImage.php');
                  $image = new SimpleImage();
                  $image->load($_FILES["photo"]["tmp_name"]);
                
                  $image->resize(1920, 1080);
                  $image->save($_FILES["photo"]["tmp_name"]);


                  $tasi=move_uploaded_file($_FILES["photo"]["tmp_name"], $dosyayolu);
                  $sayi=$db->prepare("select image_count from kullanici_verileri WHERE k_adi=?;");
                  $sayi->execute(array($_SESSION['kadi']));
                  $islem=$sayi->fetch();
                  $imageCountAdd=$islem["image_count"]+1;
                  $id=$_SESSION['id'];
                  $kayit2=$db->exec("update kullanici_verileri set image_count=$imageCountAdd WHERE ID=$id");

                  $kayit=$db->prepare("insert into images set
                          image_name=?,
                          image_type=?,
                          image_size=?,
                          user_name=?
                  ");

                  $image_type=$_FILES["photo"]["type"];
                  $image_size=$_FILES["photo"]["size"];
                  $kayit->execute(array($dosyayolu,$image_type,$image_size,$_SESSION['kadi']));
               
                  if ($tasi) {
                      header("Refresh: 5; url=index.php");
                      $resimDegis=$dosyayolu;
                      list($mevcutGenislik, $mevcutYukseklik)=getimagesize($resimDegis);
                      $yukseklik=350;
                      $genislik=round(($mevcutGenislik*$yukseklik)/$mevcutYukseklik);
                      $hedef = imagecreatetruecolor($genislik, $yukseklik);
                      $kaynak = imagecreatefromjpeg($resimDegis);
                      imagecopyresampled($hedef, $kaynak, 0, 0, 0, 0, $genislik, $yukseklik, $mevcutGenislik, $mevcutYukseklik);
                      imagejpeg($hedef, $resimDegis, 100);
                      imagedestroy($hedef);

                      echo "   <div class='d-flex justify-content-center'>
                        <div class='alert alert-success'>
                        <strong>Dosya ismi :".$dosyaAdi."</strong><br>
                        <strong>Dosya Yükleme Başarılı!</strong> Anasayfa'ya yönlendiriliyorsunuz...
                        </div>
                        </div> ";
                  } else {
                      echo "   <div class='d-flex justify-content-center'>
                            <div class='alert alert-danger'>
                             <strong>Geçici klasörden, ana klasöre dosya taşıma hatası!</strong>
                             </div>
                             </div>";
                  }
              } else {
                  echo "   <div class='d-flex justify-content-center'>
                <div class='alert alert-danger'>
                 <strong>Dosya Yüklenemedi.!</strong>
                 </div>
                 </div>";
              }
          } else {
              echo "   <div class='d-flex justify-content-center'>
            <div class='alert alert-warning'>
             <strong>Dikkat! Yükleme Yapmadınız..!</strong>
             </div>
             </div>";
          }
      }
  }
 

  


  ?>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>
</html>