<?php
include('../db_connect.php');
if (isset($_POST["kaydet"])) {
    $sql= "INSERT INTO admin(admin,sifre) VALUES (?, ?)";
 
    $dizi =[
        $_POST["Admin"],
        $_POST["Sifre"]
        
    ];
    $sth=$db->prepare($sql);
    $sonuc =$sth->execute($dizi);
      
    header("Location:adminkayit.php");
}
 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kullanıcı Ekle</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
<body>
    
        <div class="sidebar-container">
  <div class="sidebar-logo">
   <a href="Panel.php"><button> Let's Feed</button></a> 
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
        <i class="fa fa-tachometer" aria-hidden="true"></i> Kullancı Ekle
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-info-circle" aria-hidden="true"></i> Information
      </a>
    </li>
  </ul>
    <a href="Index.php">
   <button> Çıkış Yap</button></a>
</div>

<div class="content-container">

  <div class="container-fluid">

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    
    <header>
        <div class="container">
            <div class="row">

            <div class="row">
                <div class="col">
                    
                </div>
            </div>
        </div>
               <div class="jumbotron">
                <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-1 text-center">Admin Ekle</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="btn-group">
                        <a href="adminkayit.php" class="btn btn-outline-primary">Tüm Adminler</a>
                      
                    </div>
                </div>
            </div>
        </div>
    
    </header>
    <main>
      
       <form action="" method="post" class="row mt-4 g-3">
            <div class="col-6">
                <label for="ad" class="form-label">Admin</label>
                <input type="text" class="form-control" name="Admin" required>
            </div>
            <div class="col-6">
                <label for="sad" class="form-label">Sifre</label>
                <input type="text" class="form-control" name="Sifre" required>
            </div>
            <button type="submit" name="kaydet" class="btn btn-primary" >Kaydet</button>
        </form>
                        </thead>
                        <tbody>

    </div>
    </main>
    <footer></footer>
</body>
</html>
 