<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoRide</title>
<!-- - favicon-->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
<!-- - custom css link-->
    <link rel="stylesheet" href="asset/css/beranda2.css">
    <!--- google font link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600;700&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">
<!-- - preload images  -->
</head>
<body id="top">
<!--  - #HEADER -->
    <header class="header" data-header>
        <div class="container">
            <h1><a href="#" class="logo">GoRide</a></h1>
            <nav class="navbar" data-navbar>
                <div class="navbar-top">
                    <a href="#" class="logo">GoRide</a>
                    <button class="nav-close-btn" aria-label="Clsoe menu" data-nav-toggler>
                        <ion-icon name="close-outline"></ion-icon>
                    </button>
                </div>
                <ul class="navbar-list">
                    <li class="navbar-item">
                        <a href="#hm.php" class="navbar-link" data-nav-link>
                            <span>Beranda</span>
                            <ion-icon name="chevron-forward"></ion-icon>
                        </a>
                    </li>
                    <li class="navbar-item">
                        <a href="pesanan2.php" class="navbar-link" data-nav-link>
                            <span>Pesanan</span>
                            <ion-icon name="chevron-forward"></ion-icon>
                        </a>
                    </li>
                    <li class="navbar-item">
                        <a href="#Promo" class="navbar-link" data-nav-link>
                            <span>Promo</span>
                            <ion-icon name="chevron-forward"></ion-icon>
                        </a>
                    </li>
                    <li class="navbar-item">
                        <a href="home.php" class="navbar-link" data-nav-link>
                            <span>Profil</span>
                             <ion-icon name="chevron-forward"></ion-icon>
                        </a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="navbar-link" data-nav-link>
                            <span>Call center</span>
                            <ion-icon name="chevron-forward"></ion-icon>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="header-contact">
            <div>
                    <p class="contact-label">GoRide Call center</p>
                    <a href="tel:12345678910" class="contact-number">12345678910</a>
                </div>
                <div class="contact-icon">
                    <ion-icon name="call-outline"></ion-icon>
                </div>
            </div>
            <button class="nav-open-btn" aria-label="Open menu" data-nav-toggler>
                <ion-icon name="menu-outline"></ion-icon>
            </button>
            <div class="overlay" data-nav-toggler data-overlay></div>
        </div>
    </header>
    <main>
        <article>
            <!--  - #beranda-->
            <section class="section hero" aria-label="home" id="home"
                style="background-image: url('./assets/images/hero-banner.jpg')">
                <div class="container">
                    <div class="hero-content">
                        <h2 class="h1 hero-title">
                            <span class="span">GoRide</span> HMGoHM
                        </h2>
                        <p class="hero-text">
                            Bersama GoRide Anda dapat melakukan perjalanan kemana saja
                        </p>

                        <a href="pesanan2.php" class="btn-outline">Pesan sekarang</a></div></div>
            </section>
            
            <!-- - #promo -->

            <section class="section blog" aria-label="blog" id="blog">
                <div class="container">

                    <p class="section-subtitle">Promo</p>

                    <h2 class="h2 section-title">Promo Khusus pengguna Baru</h2>

                    <p class="section-text">
                        Berikut ini adalah promo promo yang sedang berlaku untuk saat ini
                    </p>

                    <ul class="blog-list grid-list">

                        <li>
                            <div class="blog-card">

                                <figure class="card-banner img-holder" style="--width: 790; --height: 370;">
                                    <img src="asset/gambar/Kuning Merah Ilustrasi Paket Kuota Internet Facebook Ad.png" width="790" height="370" loading="lazy"
                                        alt=""
                                        class="img-cover">
                                </figure>
                                   <div class="card-content"><h3 class="h3 card-title">
                                        <a href="#">
                                            Promo khusus pengguna baru
                                        </a>
                                    </h3>
                                    <p class="card-text">
                                        Promo diskon 65% ini hanya berlaku hingga 30 februari 2023
                                    </p>
                                      <a href="#" class="btn-link">
                                        <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>
                                       <span class="span">Read More</span>
                                    </a>

                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="blog-card">

                                <figure class="card-banner img-holder" style="--width: 790; --height: 370;">
                                    <img src="sset/gambar/Kuning Merah Ilustrasi Paket Kuota Internet Facebook Ad.png" width="790" height="370" loading="lazy"
        
                                        class="img-cover">
                                </figure>

                                <div class="card-content"><h3 class="h3 card-title">
                                        <a href="#">
                                            Promu khusus pengguna baru
                                        </a>
                                    </h3>

                                    <p class="card-text">
                                        Promo ini hanya dapat di gunakan satu kali dan hanya untuk pengguna baru
                                    </p>

                                    <a href="#" class="btn-link">
                                        <ion-icon name="chevron-forward" aria-hidden="true"></ion-icon>

                                        <span class="span">Read More</span>
                                    </a>

                                </div>

                            </div>
                        </li>

                    </ul>

                </div>
            </section>
            <!-- #FOOTER--> 
            <footer class="footer">
        <div class="container">
            <div class="footer-top section">
                <div class="footer-brand">
                    <a href="#" class="logo">GoRide</a>
                    <p class="footer-text">
                        GoRide adalah sebuah platform digital yang memudahkan pengunanya untuk berpergian kemana saja.</p>
                    <ul class="social-list">
                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-youtube"></ion-icon>
                            </a>
                        </li>
                    </ul>
                </div>
                <ul class="footer-list">
                    <li>
                        <p class="footer-list-title">Quick Links</p>
                    </li>
                    <li>
                        <a href="#" class="footer-link">About</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Pesanan</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Promo</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">FAQ</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Cusstumer services</a>
                    </li>
                </ul>
                <ul class="footer-list">
                    <li>
                        <p class="footer-list-title">Community</p>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Business </a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Testimonials</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="footer-link">Terms </a>
                    </li>
                </ul>
            </div>
            <div class="footer-bottom">
                <p class="copyright">
                    &copy; 2023 copyright by <a href="#" class="copyright-link">GoRide</a>
                </p>
            </div>
        </div>
    </footer>
 <!-- - #BACK TO TOP -->
    <a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
        <ion-icon name="chevron-up"></ion-icon>
    </a>
 <!--  - custom js link-->
    <script src="./assets/js/script.js" defer></script>
<!-- - ionicon link-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
