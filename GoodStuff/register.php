<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Good Stuff</title>

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="./assets/css/style-prefix.css">

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>

<body>


    <div class="overlay" data-overlay></div>


    <header>

        <div class="header-top">

            <div class="container">

                <ul class="header-social-container">

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
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                </ul>



                <div class="header-top-actions">



                    <select name="language">

                        <option value="en-US">Türkçe</option>
                        <option value="es-ES">İngilizce</option>

                    </select>

                </div>

            </div>

        </div>

        <div class="header-main">

            <div class="container">

                <a href="index.php" class="header-logo">
                    <img src="./assets/images/logo/good_stuff4.png" alt="Anon's logo" width="230" height="80">
                </a>

                <div class="header-search-container">

                    <input type="search" name="search" class="search-field" placeholder="Bugün ne yemek istersin  :)">

                    <button class="search-btn">
                        <ion-icon name="search-outline"></ion-icon>
                    </button>

                </div>

                <div class="header-user-actions">
                    <button class="action-btn">
                        <a href="register.php">
                            <ion-icon name="person-outline"></ion-icon>
                        </a>
                    </button>

                    <button class="action-btn">
                        <ion-icon name="heart-outline"></ion-icon>
                        <span class="count">0</span>
                    </button>

                    <button class="action-btn">
                        <ion-icon name="bag-handle-outline"></ion-icon>
                        <span class="count">0</span>
                    </button>

                </div>

            </div>

        </div>

        <nav class="desktop-navigation-menu">

            <div class="container">

                <ul class="desktop-menu-category-list">

                    <li class="menu-category">
                        <a href="index.php" class="menu-title">Ana Sayfa</a>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Kategoriler</a>

                        <div class="dropdown-panel">

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Tatlı & Tuzlu </a>
                                </li>
                                <li class="panel-list-item">
                                    <a href="#">İzmir</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">En Yeniler</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Macaron</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Çikolata</a>
                                </li>

                            </ul>

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Pasta</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Bütün Pasta</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Porsiyon Pasta </a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Kek</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Özel Gün Pastası</a>
                                </li>


                            </ul>

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Çikolata</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Madlen Çikolata</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Pralin Çikolata</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Sade Krep Dantel</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Draje Çikolata</a>
                                </li>


                            </ul>

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Tatlı & Tuzlu</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Ay Çekirdekli Plaka Gevrek</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Anasonlu Galeta</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Tatlı Kurabiye</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Tuzlu Kurabiye</a>
                                </li>




                            </ul>

                        </div>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Çikolata</a>

                        <ul class="dropdown-list">

                            <li class="dropdown-item">
                                <a href="#">Shirt</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Shorts & Jeans</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Safety Shoes</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Wallet</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Tatlı & Tuzlu</a>

                        <ul class="dropdown-list">

                            <li class="dropdown-item">
                                <a href="#">Dress & Frock</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Earrings</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Necklace</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Makeup Kit</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Lokum</a>

                        <ul class="dropdown-list">

                            <li class="dropdown-item">
                                <a href="#">Earrings</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Couple Rings</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Necklace</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Bracelets</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Dondurma</a>

                        <ul class="dropdown-list">

                            <li class="dropdown-item">
                                <a href="#">Clothes Perfume</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Deodorant</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Flower Fragrance</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Air Freshener</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Blog</a>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Teklifler</a>
                    </li>

                </ul>

            </div>

        </nav>







        <div class="product-featured">

            <div class="showcase-container p-50">
                <div class="showcase">
                    <div class="showcase-banner">
                        <img src="assets/images/products/registerimage.jpeg" width="400" alt="shampoo, conditioner & facewash packs" class="showcase-img">
                    </div>
                    <div class="showcase-content">




                        <h1>
                            <font color=”FF3366”>GİRİŞ YAPMAK İÇİN...</font>
                            <br><br>
                        </h1>

                        <p class="showcase-desc">
                            Devam etmek için...
                        </p>
                        <a href="uyelik/kayit.php"><button class="add-cart-btn">Kayıt ol</button> </a>
                        <p class="showcase-desc">
                            Zaten bir hesabın var mı?
                            <a href="uyelik/login.php"><button class="add-cart-btn">Giriş Yap</button> </a>
                        </p>

                    </div>



                </div>
            </div>
        </div>

        </div>




        <!--
    - MAIN
  -->
        <!--
      - BANNER
    -->





        <!--
      - CATEGORY
    -->




        <!--
      - PRODUCT
    -->




        <!--
            - PRODUCT MINIMAL
          ---

        <!--
            - PRODUCT FEATURED
          -->
        <!--
      - TESTIMONIALS, CTA & SERVICE
    -->

        <!--
            - TESTIMONIALS
          -->



        <!--
            - CTA
          -->





        <!--
            - SERVICE
          -->




        <!--
      - BLOG
    -->

        <div class="blog">

            <div class="container">

                <div class="blog-container has-scrollbar">




                </div>

            </div>

        </div>

        </main>





        <!--
    - FOOTER
  -->

        <footer>


            <div class="footer-nav">

                <div class="container">




                    <ul class="footer-nav-list">

                        <li class="footer-nav-item">
                            <h2 class="nav-title">Şirketimiz</h2>
                        </li>

                        <li class="footer-nav-item">
                            <a href="#" class="footer-nav-link">Teslimat</a>
                        </li>

                        <li class="footer-nav-item">
                            <a href="#" class="footer-nav-link">Yasal Haklar</a>
                        </li>

                        <li class="footer-nav-item">
                            <a href="#" class="footer-nav-link">Şartlar ve ilkeler</a>
                        </li>

                        <li class="footer-nav-item">
                            <a href="#" class="footer-nav-link">Hakkımızda</a>
                        </li>

                        <li class="footer-nav-item">
                            <a href="#" class="footer-nav-link">Ödeme Sistemi</a>
                        </li>

                    </ul>

                    <ul class="footer-nav-list">

                        <li class="footer-nav-item">
                            <h2 class="nav-title">Hizmetler</h2>
                        </li>

                        <li class="footer-nav-item">
                            <a href="#" class="footer-nav-link">Düşen Fiyatlar</a>
                        </li>

                        <li class="footer-nav-item">
                            <a href="#" class="footer-nav-link">Yeni Ürünler</a>
                        </li>

                        <li class="footer-nav-item">
                            <a href="#" class="footer-nav-link">En sevilenler</a>
                        </li>

                        <li class="footer-nav-item">
                            <a href="#" class="footer-nav-link">Bize ulaş</a>
                        </li>

                        <li class="footer-nav-item">
                            <a href="#" class="footer-nav-link">Konum</a>
                        </li>

                    </ul>

                    <ul class="footer-nav-list">

                        <li class="footer-nav-item">
                            <h2 class="nav-title">İletişim</h2>
                        </li>

                        <li class="footer-nav-item flex">
                            <div class="icon-box">
                                <ion-icon name="location-outline"></ion-icon>
                            </div>

                            <address class="content">
                                Good Stuff Bakery
                            </address>
                        </li>

                        <li class="footer-nav-item flex">
                            <div class="icon-box">
                                <ion-icon name="call-outline"></ion-icon>
                            </div>

                            <a href="tel:+607936-8058" class="footer-nav-link">+123456789</a>
                        </li>

                        <li class="footer-nav-item flex">
                            <div class="icon-box">
                                <ion-icon name="mail-outline"></ion-icon>
                            </div>

                            <a href="mailto:example@gmail.com" class="footer-nav-link">goodstuff@gmail.com</a>
                        </li>

                    </ul>

                    <ul class="footer-nav-list">

                        <li class="footer-nav-item">
                            <h2 class="nav-title">Bizi Takip Et</h2>
                        </li>

                        <li>
                            <ul class="social-link">

                                <li class="footer-nav-item">
                                    <a href="#" class="footer-nav-link">
                                        <ion-icon name="logo-facebook"></ion-icon>
                                    </a>
                                </li>

                                <li class="footer-nav-item">
                                    <a href="#" class="footer-nav-link">
                                        <ion-icon name="logo-twitter"></ion-icon>
                                    </a>
                                </li>

                                <li class="footer-nav-item">
                                    <a href="#" class="footer-nav-link">
                                        <ion-icon name="logo-linkedin"></ion-icon>
                                    </a>
                                </li>

                                <li class="footer-nav-item">
                                    <a href="#" class="footer-nav-link">
                                        <ion-icon name="logo-instagram"></ion-icon>
                                    </a>
                                </li>

                            </ul>
                        </li>

                    </ul>

                </div>

            </div>

            <div class="footer-bottom">

                <div class="container">

                    <img src="./assets/images/payment.png" alt="payment method" class="payment-img">

                    <p class="copyright">
                        Copyright &copy; <a href="#">Anon</a> all rights reserved.
                    </p>

                </div>

            </div>

        </footer>






        <!--
    - custom js link
  -->
        <script src="./assets/js/script.js"></script>

        <!--
    - ionicon link
  -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>