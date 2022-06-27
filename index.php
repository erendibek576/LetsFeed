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
        <link rel="icon" type="image/x-icon" href="assets/favicon.svg" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- BootStrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

       
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?php
       include("blades/navbar.php");
       ?>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Hayvanlara destek platformu</div>
                <div class="masthead-heading">Let'sFeed'e hoş geldiniz...</div>
                <?php
               if (isset($_SESSION['kadi'])!=true) {
                   echo " <a class='btn btn-warning btn-lg text-uppercase text-light mt-5' href='LogIn.php'>";
                   echo  "Sen de bize katıl!";
                   echo "<a/>";
               } else {
                    echo " <a class='btn btn-warning btn-lg text-uppercase text-light' href='fileUpload.php'>";
                    echo  "Resim yükle, yardım et!";
                    echo "<a/>";
                }
                ?>   
            </div>
        </header>
        <!-- Services-->
      
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase fw-bold">Sıralama</h2>
                    <h3 class="section-subheading text-muted">Bu liste yardımda bulunan kişileri içerir.</h3>
                </div>
                <div class="row text-center">

                        <?php
            
                        include("db_connect.php");
                        $resim=$db->prepare("select * from kullanici_verileri ORDER BY image_count DESC LIMIT 10");
                        $resim->execute(array());
                        $d= $resim->fetchAll(PDO::FETCH_ASSOC);

                        foreach ($d as $m) {
                            // Mobil üstü görünüm
                            echo '<div class="col-md-3 d-none d-sm-block">';
                            echo '  <span class="fa-stack fa-4x">
                            <img src="./assets/img/default-profile.svg" class="w-75">
                            </span>';
                            echo '<h4 class="my-3 fw-bold">'.$m["k_adi"].'</h4>';
                            echo ' <p class="text-muted">Resim yükleme sayısı :'.$m["image_count"].'</p>';
                            echo '</div>';

                            // Mobil Görünüm

                            echo
                          '<div class="col-4 d-block d-sm-none my-2">
                            <img src="./assets/img/default-profile.svg">
                          </div>
                          <div class="col-8 d-block d-sm-none my-2"><b>'.
                               $m["k_adi"].'</b><br><b>Yüklenen resim sayısı:</b> '.$m["image_count"].'
                               
                          </div>
                          ';
                        }
                        ?>

                    
                 
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase fw-bold">RESİM GALERİSİ</h2>
                    <h3 class="section-subheading text-muted">Bu sayfada son eklenen resimler mevcuttur.</h3>
                </div>
                <!-- Images -->
                <div class="row">
                    
                        <!-- Portfolio item 1-->
                        <?php
                            include("db_connect.php");
                            $resim=$db->prepare("select * from images ORDER BY image_id DESC LIMIT 9");
                            $resim->execute(array());
                            $d= $resim->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($d as $m) {
                                echo '<div class="col-lg-4 col-sm-6 mb-4">';
                                echo '  <div class="portfolio-item shadow-sm">';
                                echo "      <img class='img-fluid' src='$m[image_name]' alt='...' />";
                                echo '      <div class="portfolio-caption">';
                                echo "          <div class='portfolio-caption-subheading '>Yükleyen : $m[user_name]</div>";
                                echo '          <div class="portfolio-caption-subheading text-muted"></div>';
                                echo '      </div>';
                                echo '  </div>';
                                echo '</div>';
                            }
                        ?>
                </div>
                <!-- Container -->
            </div>
        </section>
   
         
        


        <!-- Contact-->
        <section class="page-section"id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-subheading text-light">Öneri, Talep veya Şikayetleriniz için bizimle iletişime geçin</h2>
                    <h3 class="section-subheading text-warning">İletişim formu doldurun.</h3>
                    <button type="button" class="btn btn-outline-warning"><a href="contact.php" class="text-decoration-none text-light">İletişime geç</a></button>
                </div>
            </div>
            
        </section>
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

        <!-- Bootstrap core JS-->
        
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
