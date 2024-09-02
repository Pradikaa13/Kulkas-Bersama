<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kulkas Bersama</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy - v1.3.0
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
      <!-- ======= Header ======= -->
      <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
    
          <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <img src="https://www.identites-mutuelle.com/sites/default/themes/identite_v2/templates/landing/assets/img/logo.png" alt=""> 
          </a>
    
          <nav id="navbar" class="navbar">
        <img src="https://www.identites-mutuelle.com/sites/default/themes/identite_v2/templates/landing/assets/img/logo.png" alt="">
        <ul>
          <li><a href="{{ ('home') }}">Home</a></li>
          <li><a href="mitra.html">Kemitraan</a></li> 
          <li><a href="{{ ('about') }}">About</a></li>
          <li><a href="{{ ('menu') }}">Menu</a></li>
          <li><a href="{{ ('contact') }}">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->
    
          <a class="btn-book-a-table" href="login.html">Login</a>
          <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
          <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    
        </div>
      </header><!-- End Header -->
    
  <!-- End Header -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header">
            <p>Check Our <span> Menu</span></p>
          </div>
  
          <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="400">
  
            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#kulkas-1">
                <h4>Kulkas 1</h4>
              </a>
            </li><!-- End tab nav item -->
  
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#kulkas-2">
                <h4>Kulkas 2</h4>
              </a><!-- End tab nav item -->
  
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#kulkas-3">
                <h4>Kulkas 3</h4>
              </a>
            </li><!-- End tab nav item -->
  
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#kulkas-4">
                <h4>Kulkas 4</h4>
              </a>
            </li><!-- End tab nav item -->

            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#kulkas-5">
                <h4>Kulkas 5</h4>
              </a>
            </li><!-- End tab nav item -->
  
          </ul>
  
          <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
  
            <div class="tab-pane fade active show" id="kulkas-1">
  
              <div class="tab-header text-center">
                <p>Menu</p>
              </div>
  
              <div class="row gy-5">
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Nasi Ayam Teriyaki</h4>
                  <p class="ingredients">
                    Nasi putih dengan lauk ayam saus teriyaki
                  </p>
                </div><!-- Menu Item -->
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Roti</h4>
                  <p class="ingredients">
                    Roti dengan isian selai beragam rasa
                  </p>
                </div><!-- Menu Item -->
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt="" width="800cm"></a>
                  <h4 class="price">Nasi Rendang</h4>
                  <p class="ingredients">
                    Nasi Putih, lauk rendang sapi dengan bumbu khas rendang dan sambal 
                  </p>
                </div><!-- Menu Item -->
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Air Mineral</h4>
                  <p class="ingredients">
                    Air mineral dingin
                  </p>
                </div><!-- Menu Item -->
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Minuman Teh</h4>
                  <p class="ingredients">
                    Minuman teh khas dengan gula batu
                  </p>
                </div><!-- Menu Item -->
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt="" width="200cm"></a>
                  <h4 class="price">Minuman Bersoda</h4>
                  <p class="ingredients">
                    Minuman bersoda dingin
                  </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-7.png" class="menu-img img-fluid" alt="" width="350cm"></a>
                  <h4 class="price">Pop Mie</h4>
                  <p class="ingredients">
                    Mie instant cup dengan beragam rasa 
                  </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-8.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Origiri</h4>
                  <p class="ingredients">
                    Makanan khas jepang, dengan nasi dilapisi rumput laut dan isian ayam didalamnya
                  </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-9.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Sosis Kanzler</h4>
                  <p class="ingredients">
                    Sosis siap makan dengan berbagai rasa
                  </p>
                </div><!-- Menu Item -->
  
              </div>
            </div><!-- End Starter Menu Content -->
  
            <div class="tab-pane fade" id="kulkas-2">
  
              <div class="tab-header text-center">
                <p>Menu</p>
              </div>
  
              <div class="row gy-5">
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Nasi Ayam Teriyaki</h4>
                  <p class="ingredients">
                    Nasi putih dengan lauk ayam saus teriyaki
                  </p>
                </div><!-- Menu Item -->
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Roti</h4>
                  <p class="ingredients">
                    Roti dengan isian selai beragam rasa
                  </p>
                </div><!-- Menu Item -->
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt="" width="800cm"></a>
                  <h4 class="price">Nasi Rendang</h4>
                  <p class="ingredients">
                    Nasi Putih, lauk rendang sapi dengan bumbu khas rendang dan sambal 
                  </p>
                </div><!-- Menu Item -->
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Air Mineral</h4>
                  <p class="ingredients">
                    Air mineral dingin
                  </p>
                </div><!-- Menu Item -->
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Minuman Teh</h4>
                  <p class="ingredients">
                    Minuman teh khas dengan gula batu
                  </p>
                </div><!-- Menu Item -->
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt="" width="200cm"></a>
                  <h4 class="price">Minuman Bersoda</h4>
                  <p class="ingredients">
                    Minuman bersoda dingin
                  </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-7.png" class="menu-img img-fluid" alt="" width="350cm"></a>
                  <h4 class="price">Pop Mie</h4>
                  <p class="ingredients">
                    Mie instant cup dengan beragam rasa 
                  </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-8.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Origiri</h4>
                  <p class="ingredients">
                    Makanan khas jepang, dengan nasi dilapisi rumput laut dan isian ayam didalamnya
                  </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-9.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Sosis Kanzler</h4>
                  <p class="ingredients">
                    Sosis siap makan dengan berbagai rasa
                  </p>
                </div><!-- Menu Item -->
  
              </div>
            </div><!-- End Breakfast Menu Content -->
  
            <div class="tab-pane fade" id="kulkas-3">
  
              <div class="tab-header text-center">
                <p>Menu</p>
              </div>
  
              <div class="row gy-5">
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Nasi Ayam Teriyaki</h4>
                  <p class="ingredients">
                    Nasi putih dengan lauk ayam saus teriyaki
                  </p>
                </div><!-- Menu Item -->
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Roti</h4>
                  <p class="ingredients">
                    Roti dengan isian selai beragam rasa
                  </p>
                </div><!-- Menu Item -->
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt="" width="800cm"></a>
                  <h4 class="price">Nasi Rendang</h4>
                  <p class="ingredients">
                    Nasi Putih, lauk rendang sapi dengan bumbu khas rendang dan sambal 
                  </p>
                </div><!-- Menu Item -->
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Air Mineral</h4>
                  <p class="ingredients">
                    Air mineral dingin
                  </p>
                </div><!-- Menu Item -->
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Minuman Teh</h4>
                  <p class="ingredients">
                    Minuman teh khas dengan gula batu
                  </p>
                </div><!-- Menu Item -->
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt="" width="200cm"></a>
                  <h4 class="price">Minuman Bersoda</h4>
                  <p class="ingredients">
                    Minuman bersoda dingin
                  </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-7.png" class="menu-img img-fluid" alt="" width="350cm"></a>
                  <h4 class="price">Pop Mie</h4>
                  <p class="ingredients">
                    Mie instant cup dengan beragam rasa 
                  </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-8.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Origiri</h4>
                  <p class="ingredients">
                    Makanan khas jepang, dengan nasi dilapisi rumput laut dan isian ayam didalamnya
                  </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-9.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Sosis Kanzler</h4>
                  <p class="ingredients">
                    Sosis siap makan dengan berbagai rasa
                  </p>
                </div><!-- Menu Item -->
  
              </div>
            </div><!-- End Lunch Menu Content -->
  
            <div class="tab-pane fade" id="kulkas-4">
  
              <div class="tab-header text-center">
                <p>Menu</p>
              </div>
  
              <div class="row gy-5">
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Nasi Ayam Teriyaki</h4>
                  <p class="ingredients">
                    Nasi putih dengan lauk ayam saus teriyaki
                  </p>
                </div><!-- Menu Item -->
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Roti</h4>
                  <p class="ingredients">
                    Roti dengan isian selai beragam rasa
                  </p>
                </div><!-- Menu Item -->
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt="" width="800cm"></a>
                  <h4 class="price">Nasi Rendang</h4>
                  <p class="ingredients">
                    Nasi Putih, lauk rendang sapi dengan bumbu khas rendang dan sambal 
                  </p>
                </div><!-- Menu Item -->
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Air Mineral</h4>
                  <p class="ingredients">
                    Air mineral dingin
                  </p>
                </div><!-- Menu Item -->
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Minuman Teh</h4>
                  <p class="ingredients">
                    Minuman teh khas dengan gula batu
                  </p>
                </div><!-- Menu Item -->
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt="" width="200cm"></a>
                  <h4 class="price">Minuman Bersoda</h4>
                  <p class="ingredients">
                    Minuman bersoda dingin
                  </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-7.png" class="menu-img img-fluid" alt="" width="350cm"></a>
                  <h4 class="price">Pop Mie</h4>
                  <p class="ingredients">
                    Mie instant cup dengan beragam rasa 
                  </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-8.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Origiri</h4>
                  <p class="ingredients">
                    Makanan khas jepang, dengan nasi dilapisi rumput laut dan isian ayam didalamnya
                  </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-9.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Sosis Kanzler</h4>
                  <p class="ingredients">
                    Sosis siap makan dengan berbagai rasa
                  </p>
                </div><!-- Menu Item -->
  
              </div>
            </div><!-- End Dinner Menu Content -->
  
            <div class="tab-pane fade" id="kulkas-5">
  
              <div class="tab-header text-center">
                <p>Menu</p>
              </div>
  
              <div class="row gy-5">
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Nasi Ayam Teriyaki</h4>
                  <p class="ingredients">
                    Nasi putih dengan lauk ayam saus teriyaki
                  </p>
                </div><!-- Menu Item -->
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Roti</h4>
                  <p class="ingredients">
                    Roti dengan isian selai beragam rasa
                  </p>
                </div><!-- Menu Item -->
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt="" width="800cm"></a>
                  <h4 class="price">Nasi Rendang</h4>
                  <p class="ingredients">
                    Nasi Putih, lauk rendang sapi dengan bumbu khas rendang dan sambal 
                  </p>
                </div><!-- Menu Item -->
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-4.png" class="glightbox"><img src="assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Air Mineral</h4>
                  <p class="ingredients">
                    Air mineral dingin
                  </p>
                </div><!-- Menu Item -->
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-5.png" class="glightbox"><img src="assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Minuman Teh</h4>
                  <p class="ingredients">
                    Minuman teh khas dengan gula batu
                  </p>
                </div><!-- Menu Item -->
  
                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt="" width="200cm"></a>
                  <h4 class="price">Minuman Bersoda</h4>
                  <p class="ingredients">
                    Minuman bersoda dingin
                  </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-7.png" class="menu-img img-fluid" alt="" width="350cm"></a>
                  <h4 class="price">Pop Mie</h4>
                  <p class="ingredients">
                    Mie instant cup dengan beragam rasa 
                  </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-8.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Origiri</h4>
                  <p class="ingredients">
                    Makanan khas jepang, dengan nasi dilapisi rumput laut dan isian ayam didalamnya
                  </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-6.png" class="glightbox"><img src="assets/img/menu/menu-item-9.png" class="menu-img img-fluid" alt="" width="400cm"></a>
                  <h4 class="price">Sosis Kanzler</h4>
                  <p class="ingredients">
                    Sosis siap makan dengan berbagai rasa
                  </p>
                </div><!-- Menu Item -->
  
              </div>
            </div><!-- End Dinner Menu Content -->
          </div>
  
        </div>
      </section><!-- End Menu Section -->
  
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Sukapura,<br>
              Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257<br>
             <br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> 12022078<br>
              <strong>Email:</strong> kulkasbersama@gmail.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Every Day</strong> 09PM - 11PM<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>
  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>