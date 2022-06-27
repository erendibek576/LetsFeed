<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="assets/img/LetsFeed_Logo.svg" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Anasayfa</a></li>
                        <li class="nav-item"><a class="nav-link" href="info.php">Hakkımızda</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">İLETİŞİM</a></li>
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
                                <li><a class="dropdown-item" href="UserProfile/UserProfile.php">Profil</a></li>
                                <li><a class="dropdown-item" href="fileUpload.php">Resim Yükle</a></li>
                                <li><a class="dropdown-item" href="cikis.php">Çıkış Yap</a></li>
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