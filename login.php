<?php
include_once "phpconfig/config.php";
session_start();

?>

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

  <?php include './links.php'; ?>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />

  <link href="assets/css/login.css" rel="stylesheet" />

  <script src="./include.js"></script>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" /></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="./index.php">Home</a></li>
          <li>
            <a class="nav-link scrollto" href="./services.php">Our Services</a>
          </li>
          <li>
            <a class="nav-link scrollto" href="./aboutus.php">About Us</a>
          </li>
          <li>
            <a class="nav-link scrollto" href="#Patient">New Patient</a>
          </li>
          <li>
            <a class="nav-link scrollto" href="./contact.php">Contact Us</a>
          </li>
          <li>
            <a class="getstarted Loginbtn scrollto" href="./login.php">Login</a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <main id="main">
    <!-- ======= Login Section ======= -->
    <section id="account" class="account section-bg" style="padding-top: 10%">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Log In</h2>
          <p>
            "Log in today to experience top-notch dental care and personalized
            service that puts your oral health first."
          </p>
        </div>

        <div class="container">

          <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-6">
                <div class="card login-wrap">
                  <div class="card-body login-html">
                    <input id="tab-1" type="radio" name="tab" class="sign-in" checked /><label for="tab-1" class="tab">Sign In</label>
                    <input id="tab-2" type="radio" name="tab" class="sign-up" /><label for="tab-2" class="tab">Sign Up</label>
                    <div class="login-form">

                      <div class="sign-in-htm">

                        <form action="phpconfig/login.php" method="post" role="form" data-aos="fade-up" data-aos-delay="100">
                          <?php if (isset($_GET['error'])) { ?>
                            <div class="alert alert-danger" role="alert">
                              <?php echo $_GET['error']; ?>
                            </div>
                          <?php } ?>
                          <?php if (isset($_GET['successsign'])) { ?>
                            <div class="alert alert-success" role="alert">
                              <?php echo $_GET['successsign']; ?>
                            </div>
                          <?php } ?>
                          <div class="form-group">
                            <label for="Email" class="label">Email</label>
                            <input id="Email" name="Emaillog" type="text" class="form-control input" />
                          </div>
                          <div class="form-group">
                            <label for="pass" class="label">Password</label>
                            <input id="pass" name="Passwordlog" type="password" class="form-control input" data-type="password" />
                          </div>

                          <div class="form-group" style="margin-top: 7px;">
                            <input type="submit" class="btn btn-primary button" name="sign In" value="Sign In" />
                          </div>

                        </form>
                      </div>

                      <div class="sign-up-htm">
                        <form method="post" action="phpconfig/signup.php" autocomplete="off">
                          <?php if (isset($_GET['errorsign'])) { ?>
                            <div class="alert alert-danger" role="alert">
                              <?php echo $_GET['errorsign']; ?>
                            </div>
                          <?php } ?>
                          <div class="form-group">
                            <label for="new_user" class="label">Username</label>
                            <input id="Name" name="Name" type="text" class="form-control input" required />
                          </div>

                          <div class="form-group">
                            <label for="new_email" class="label">Email Address</label>
                            <input id="new_email" name="Email" type="text" class="form-control input" required />
                          </div>

                          <div class="form-group">
                            <label for="new_pass" class="label">Password</label>
                            <input id="new_pass" name="Password" type="password" class="form-control input" data-type="password" required />
                          </div>
                          <input type="text" name="Role" hidden value="user">


                          <div class="form-group" style="margin-top: 7px;">
                            <input type="submit" class="btn btn-primary button" name="signup" value="Sign Up" />
                          </div>

                          <div class="hr"></div>
                          <div class="foot-lnk">
                            <label for="tab-1">Already Member?</label>
                          </div>
                        </form>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>
    <!-- End Appointment Section -->

    <!-- ======= ourclinic ======= -->
    <?php include './pages/ourclinic.php'; ?>
    <!-- End ourclinic -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include './pages/footer.php'; ?>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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