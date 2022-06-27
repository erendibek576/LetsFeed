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


        <style>
           
        </style>
        <!-- BootStrap -->
    </head>
    <body id="page-top">
    <?php
       include("blades/navbar.php");
       ?>

     <!-- About-->
     <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Hakkımızda</h2>
                    <h3 class="section-subheading text-muted">Let'sFeed Kuruluş Nedeni ve Hakkımızda Merak Edilenler</h3>
                </div>
                <ul class="timeline">
                    
                
                <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Let'sFeed 2021</h4>
                                <h4 class="subheading">Let'sFeed Neden Kuruldu?</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Günümüzde hayvanlara yapılan zulümler her geçen gün daha fazla artmaktadır. 
                                Karşısındakini canlı sınıfına bile koyma zahmeti içinde olmayan insanoğlu, her geçen gün karşısındaki hayvana daha çok eziyet göstermeye başlamıştır. 
                                Bizim sitemiz bu problemi gözeterek kurulmuş bir farkındalık projesidir.</p></div>
                        </div>
                    </li>




                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Amacımız</h4>
                  
                            </div>
                            <div class="timeline-body"><p class="text-muted">İnsanoğlunu olabildiğince bilinçlendirmek ve karşısındaki nesneden ziyade bir canlı statüsünde görmesini sağlamak birinci amacımızdır.
                                İnsanların yardımlarda bulunurken çekip bizelere ulaştırdığı fotoğraflarla insanlara teşvik vermek ve
                                hayvanseverler arasında tatlı bir rekabet oluşturmak hedeflenmiştir.Sitemiz asla bir maddi kâr olayı gütmez.</p></div>
                        </div>
                    </li>




                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Başlangıç Zamanı</h4> 
                            </div>
                            <div class="timeline-body"><p class="text-muted">2021 yılında bir grup hayvansever Bilgisayar Programcılığı öğrencileri olarak projemizi tasarlamaya başladık.
                            Öğrenmiş olduğumuz bilgilerle hayvanlara nasıl destek olabileceğimizi düşünürken bu projeyi oluşturma kararı aldık.</p></div>
                        </div>
                    </li>



                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Hayvanları Göz ardı Etme!</h4>
                                <h4 class="subheading">Farkındalığın Bir Parçası Ol!</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Hayatımızın olağan gidişinde her gün sokakta birbirinden sevimli hayvanlarla karşılaşıyoruz. 
                            Bazen korktuğumuz yolu bile değiştireceğimiz kadar korkutan hayvanlardan kaçmaya çalışırken bazen de sadece başını okşamakla ve sevmekle yetiniyoruz.
                            Kış aylarında ve dışarda üşüyen,aç kalan ve sayısı fazlaca olan hayvanlarımıza yardım etmeliyiz.
                            </p></div>
                        </div>
                    </li>


                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/5.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Toplumsal Bilinç Amacımız</h4> 
                            </div>
                            <div class="timeline-body"><p class="text-muted">Yapabilceğimiz en azından kapıların önüne kaplarda su,süt koyarak ve yemek artıklarını atmayarak onları besleyebiliriz. 
                            Her canlı özeldir ve özellikle korunmaya muhtaçsa biz insanlara düşen de o görevi yerine getirmektir. 
                            <b>Her canlının bu dünyada yaşamaya hakkı vardır.</b></p></div>
                        </div>
                    </li>


                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Hikayemizin
                                <br />
                                Sen de
                                <br />
                                Bir Parçası Ol!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
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


            <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>