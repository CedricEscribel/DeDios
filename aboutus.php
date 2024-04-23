<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>De Dios</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/icon.png" rel="icon" />
    <link href="assets/img/icon.png " />

    <div html-include="./links.php"></div>

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <script src="./include.js"></script>
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        <a href="index.php" class="logo me-auto"
          ><img src="assets/img/logo.png" alt=""
        /></a>

        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="nav-link scrollto" href="./index.php">Home</a></li>
            <li>
              <a class="nav-link scrollto" href="./services.php">Our Services</a>
            </li>
            <li><a class="nav-link scrollto" href="#about">About Us</a></li>
            <li>
              <a class="nav-link scrollto" href="#Patient">New Patient</a>
            </li>
            <li>
              <a class="nav-link scrollto" href="./contact.php">Contact Us</a>
            </li>
            <li><a class="getstarted Loginbtn scrollto" href="./login.php">Login</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <div html-include="./pages/heropage.php"></div>
    <!-- End Hero -->

    <main id="main">
      <!-- ======= Features Section ======= -->
      <div html-include="./pages/features.php"></div>
      <!-- End Features Section -->

      <!-- ======= Teams Section ======= -->
      <div html-include="./pages/teams.php"></div>
      <!-- End Teams Section -->

      <!-- ======= Frequently Asked Questioins Section ======= -->
      <div html-include="./pages/faq.php"></div>
      <!-- End Frequently Asked Questioins Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <div html-include="./pages/footer.php"></div>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <script>
      includeHTML();
    </script>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
