<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<style>
    .sidebar-container {
  position: fixed;
  width: 220px;
  height: 100%;
  left: 0;
  overflow-x: hidden;
  overflow-y: auto;
  background: #1a1a1a;
  color: #fff;
}
.content-container {
  padding-top: 20px;
}

.sidebar-logo {
  padding: 10px 15px 10px 30px;
  font-size: 20px;
  background-color: #2574A9;
}

.sidebar-navigation {
  padding: 0;
  margin: 0;
  list-style-type: none;
  position: relative;
}

.sidebar-navigation li {
  background-color: transparent;
  position: relative;
  display: inline-block;
  width: 100%;
  line-height: 20px;
}

.sidebar-navigation li a {
  padding: 10px 15px 10px 30px;
  display: block;
  color: #fff;
}

.sidebar-navigation li .fa {
  margin-right: 10px;
}

.sidebar-navigation li a:active,
.sidebar-navigation li a:hover,
.sidebar-navigation li a:focus {
  text-decoration: none;
  outline: none;
}

.sidebar-navigation li::before {
  background-color: #2574A9;
  position: absolute;
  content: '';
  height: 100%;
  left: 0;
  top: 0;
  -webkit-transition: width 0.2s ease-in;
  transition: width 0.2s ease-in;
  width: 3px;
  z-index: -1;
}

.sidebar-navigation li:hover::before {
  width: 100%;
}

.sidebar-navigation .header {
  font-size: 12px;
  text-transform: uppercase;
  background-color: #151515;
  padding: 10px 15px 10px 30px;
}

.sidebar-navigation .header::before {
  background-color: transparent;
}

.content-container {
    padding-left: 220px;}
           .bg-renk{
        background: linear-gradient(to top right, #383838 0%, #8b8b8b 100%);
       }
      </style>  
    </head>
 
  
      
 </div>
 <div class="sidebar-container">
  <div class="sidebar-logo">
    Let's Feed
  </div>
  <ul class="sidebar-navigation">
    <li class="header">Navigation</li>
    <li>
      <a href="Kullanicisayi.php">
        <i class="fa fa-home" aria-hidden="true"></i> Kayıtlı Kullanıcı Listesi
      </a>
    </li>
      <li>
      <a href="adminkayit.php">
        <i class="fa fa-tachometer" aria-hidden="true"></i>Mevcut Adminler
      </a>
    </li>
	<li>
      <a href="adminekle.php">
        <i class="fa fa-tachometer" aria-hidden="true"></i>Admin Ekle
      </a>
    </li>
	<li>
      <a href="adminsifre.php">
        <i class="fa fa-tachometer" aria-hidden="true"></i>Admin Şifre Değiştirme
      </a>
    </li>
    <li>
      <a href="uyesil.php">
        <i class="fa fa-tachometer" aria-hidden="true"></i> Kullanıcı SİL
      </a>
    </li>
       <li>
      <a href="Uyeekle.php">
        <i class="fa fa-tachometer" aria-hidden="true"></i> Kullanıcı Ekle
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-info-circle" aria-hidden="true"></i> Information
      </a>
    </li>
  </ul>
</div>

<div class="content-container">

  <div class="container-fluid">

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
	<img style="width: 100px ; " style="height: 60px ; " src="PageFiles/LetsFeed.svg" alt="center">
        <h1 >Yönetici Paneli </h1><br>
        
      <?php
           session_start();
           echo "Hoş Geldin "."<br>".$_SESSION['adminname'];

          ?>
 
    </body>
</html>
